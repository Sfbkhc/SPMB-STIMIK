<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\API\ResponseTrait;
use App\Models\DataDiriModel;
use App\Models\PendidikanModel;
use App\Models\OrangTuaModel;
use App\Models\UserModel;
use App\Models\DokumentModel;


class User extends BaseController
{
    protected $session;
    protected $auth;
    protected $userModel;
    protected $dataDiriModel;
    protected $ortuModel;
    protected $jurusan;
    
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->userModel = new UserModel();
        $this->dataDiriModel = new DataDiriModel();
         $this->pendidikanModel = new PendidikanModel();
         $this->DokumentModel = new DokumentModel();
        $this->jurusan = new \App\Models\majorModel(); 
        $this->ortuModel = new OrangTuaModel (); 
    }
    public function Proses()
    {
        $eN = $this->session->getFlashdata('Succes') ?? '';
        $eM = $this->session->getFlashdata('error') ?? '';

        $data = [
            'title' => 'PMB STIMIK',
            'NewText' => $eN,
            'Error' => $eM,
            'initialText' => "Sedang Memproses Data...",
            'delay' => 4,
            'viewport' => false
        ];

        return view('process/Usersave', $data);
    }

    public function dashboard()
    {
        $userId = $this->session->get('user_id');
        $username = $this->session->get('user_name');
        $userEmail = $this->session->get('user_email');
        if (!$userId && !$username && !$userEmail) {
            return redirect()->to('/Login'); // Jika tidak ada session, arahkan ke halaman login
        } else {
            $getdata_Diri = $this->dataDiriModel->where('id', $userId)->first();
            $getUsers = $this->userModel->where('id', $userId)->first();
            $getPendidikan = $this->pendidikanModel->where('id', $userId)->first();
            $getOrtu = $this->ortuModel->where('id', $userId)->first();
            $getDokument = $this->DokumentModel->where('id', $userId)->first();
            $data = [
                'title' => 'PMB STIMIK',
                'users' => $getUsers,
                 'data_diri' => $getdata_Diri,
                 'pendidikan' => $getPendidikan,
                 'ortu' => $getOrtu,
                 'dokument' => $getDokument,
                 'jurusan' => $this->jurusan->where('id', $userId)->first(),
                 'id' => $userId,
                 'model' => $getdata_Diri,
                 'viewport' => true
            ];
              if ($this->request->isAJAX()) {
                return $this->response->setJSON($data);
            }

            // Load the view for normal requests
            return view('/pages/dash', $data);
        }
    }

    public function Logout()
    {
        $session = session();

        // $session->unset();
        $session->destroy();

        return redirect()->to('/Login');
    }

    // pindah ke sub controler untuk data_diri
    public function submitData()
    {
        $nama = $this->request->getPost('name');
        if (empty($nama)) {
            return $this->response->setJSON([
                'status' => 'tidak berhasil',
                'message' => 'Data received no acces'
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'Data Sampai',
                'message' => 'Data received succesfully'
            ]);
        }
    }
    // end 

    public function index(): string
    {
        $eN = session('errorname') ?? 'Erroname';
        $eM = session('erroremail') ?? 'Erroremail';
        $eP = session('errorpassword');

        $data = [
            'title' => 'PMB STIMIK',
            'name' => $eN,
            'email' => $eM,
            'pass' => $eP,
            'viewport' => false
        ];

        return view('Registration/home', $data); // Pastikan path ke view benar
    }

    public function Save()
    {
        $Rulessampul = [
            'name' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Nama harus di isi',
                    'min_length' => 'Nama minimal 3 huruf'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email harus di isi',
                    'valid_email' => 'Email tidak valid'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]|max_length[20]',
                'errors' => [
                    'required' => 'Password harus ada !!',
                    'min_length' => 'Password minimal 8 karakter',
                    'max_length' => 'Password maksimal 20 karakter'
                ]
            ],
        ];

        if (!$this->validate($Rulessampul)) {
            $validation = \Config\Services::validation();
            $nameError = $validation->getError('name');
            $emailError = $validation->getError('email');
            $passwordError = $validation->getError('password');

            return redirect()->back()->withInput()
                ->with('valid', $validation)
                ->with('errorname', $nameError)
                ->with('erroremail', $emailError)
                ->with('errorpassword', $passwordError);
        }

        $pasw = $this->request->getVar('password');
        $data = [
            'username' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($pasw, PASSWORD_DEFAULT),
        ];

        // STRES
        if (password_verify($pasw, $data['password'])) {
            
           try {
                // Coba untuk menyimpan data ke database
                if ($this->userModel->save($data)) {
                    // Ambil kembali data user berdasarkan email
                    $table = $this->userModel->where('email', $data['email'])->first();
                    
                    // Set sesi pengguna
                    $this->session->set('user_id', $table['id']);
                    $this->session->set('user_name', $table['username']);
                    $this->session->set('user_email', $table['email']);
                    
                    // Set flashdata untuk pesan sukses
                    $this->session->setFlashdata('Succes', 'Berhasil');
                } else {
                    // Jika penyimpanan gagal, set flashdata untuk pesan error
                    $this->session->setFlashdata('error', 'Gagal menyimpan data.');
                }
            } catch (\Exception $e) {
                // Tangkap error yang terjadi dan tampilkan pesan error
                $this->session->setFlashdata('error', 'Terjadi kesalahan: ' . $e->getMessage());
                
                // Anda juga bisa melakukan log error jika diperlukan
                // log_message('error', 'Error saat menyimpan data: ' . $e->getMessage());
            }

        }



        return redirect()->to('/User/Proses');
    }

    public function login()
    {

        $email = $this->request->getVar(htmlspecialchars('email'));
        $password = $this->request->getVar(htmlspecialchars('password'));


        // d($password);
        $user = $this->userModel->where('email', $email)->first();
        if ($user) {
            // dd($user);
            if (password_verify($password, $user['password'])) {
                $this->session->set('user_id', $user['id']);
                $this->session->set('user_name', $user['username']);
                $this->session->set('user_email', $user['email']);
                return redirect()->to('/Dashboard');
            } else {
                session()->setFlashdata('error', 'Password salah');
                return redirect()->to('/Login')->withInput();
            }
        } else {
            session()->setFlashdata('error', 'Email tidak ditemukan');
            return redirect()->to('/Login')->withInput();
        }
    }
}
