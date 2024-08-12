<?php

namespace App\Controllers;

use App\Models\DataDiriModel;
use App\Models\PendidikanModel;
use App\Models\OrangTuaModel;
use App\Models\DokumentModel;
use CodeIgniter\Controller;
use Config\Database;

class DataDiriController extends Controller
{
    protected $dataOrtu;
    protected $dataDiriModel;
    protected $PendidikanModel;
    protected $DokumentModel;
    protected $validation;
    protected $session;

    public function __construct()
    {
        $this->dataOrtu = new OrangTuaModel();
        $this->dataDiriModel = new DataDiriModel();
        $this->PendidikanModel = new PendidikanModel();
        $this->DokumentModel = new DokumentModel();
        $this->session = \Config\Services::session();
        $this->validation = \Config\Services::validation();
    }

    public function create()
    {
        $userId = $this->session->get('user_id');

        // $data = [
        //     'data_diri' => [
        //         'id' => $userId,
        //         'name' => $this->request->getPost('name'),
        //         'nik' => $this->request->getPost('nik'),
        //         'noHp' => $this->request->getPost('noHp'),
        //         'email' => $this->request->getPost('email'),
        //         'jenisKelamin' => $this->request->getPost('jenisKelamin'),
        //         'agama' => $this->request->getPost('agama'),
        //         'tempatLahir' => $this->request->getPost('tempat_lahir'),
        //         'tanggalLahir' => $this->request->getPost('tanggal_lahir'),
        //         'alamat' => $this->request->getPost('alamat'),
        //         'provinsi' => $this->request->getPost('provinsi'),
        //         'kotaKabupaten' => $this->request->getPost('kota'),
        //         'rtRw' => $this->request->getPost('rt_rw'),
        //         'kodePos' => $this->request->getPost('kode_pos'),
        //     ],

        //     'pendidikan' => [
        //         'id' => $userId,
        //         'nama_pendidikan' => $this->request->getPost('nama_pendidikan'),
        //         'nisn' => $this->request->getPost('nisn'),
        //         'provinsi_pendidikan' => $this->request->getPost('provinsi_pendidikan'),
        //         'kota_kabupaten_pendidikan' => $this->request->getPost('kota_kabupaten_pendidikan'),
        //         'nama_sekolah' => $this->request->getPost('nama_sekolah'),
        //         'jurusan' => $this->request->getPost('jurusan'),
        //         'tahun_lulus' => $this->request->getPost('tahun_lulus'),
        //         'no_ijazah' => $this->request->getPost('no_ijazah'),
        //         'tanggal_ijazah' => $this->request->getPost('tanggal_ijazah'),
        //         'nilai_un' => $this->request->getPost('nilai_un')
        //     ],

        //     'data_ortu' => [
        //         'id' => $userId,
        //         'nama_ayah' => $this->request->getPost('nama_ayah'),
        //         'pekerjaan_ayah' => $this->request->getPost('pekerjaan_ayah'),
        //         'pendidikan_ayah' => $this->request->getPost('pendidikan_ayah'),
        //         'no_hp_ayah' => $this->request->getPost('no_hp_ayah'),
        //         'nama_ibu' => $this->request->getPost('nama_ibu'),
        //         'pekerjaan_ibu' => $this->request->getPost('pekerjaan_ibu'),
        //         'pendidikan_ibu' => $this->request->getPost('pendidikan_ibu'),
        //         'no_hp_ibu' => $this->request->getPost('no_hp_ibu')
        //     ],
        // ];
        $data_diri = [
                'id' => $userId,
                'name' => $this->request->getPost('name'),
                'nik' => $this->request->getPost('nik'),
                'noHp' => $this->request->getPost('noHp'),
                'email' => $this->request->getPost('email'),
                'jenisKelamin' => $this->request->getPost('jenisKelamin'),
                'agama' => $this->request->getPost('agama'),
                'tempatLahir' => $this->request->getPost('tempat_lahir'),
                'tanggalLahir' => $this->request->getPost('tanggal_lahir'),
                'alamat' => $this->request->getPost('alamat'),
                'provinsi' => $this->request->getPost('provinsi'),
                'kotaKabupaten' => $this->request->getPost('kota'),
                'rtRw' => $this->request->getPost('rt_rw'),
                'kodePos' => $this->request->getPost('kode_pos')
            ];
        $fillData = [];

        // foreach ($data as $categoryname => $category) {
        //     foreach ($category as $key => $value) {
        //         if (!empty($value)) {
        //             if (!isset($fillData[$categoryname])) {
        //                 $fillData[$categoryname] = [];
        //             }
        //             $fillData[$categoryname][$key] = $value;
        //         }
        //     }
        // }


            $rules_datadiri = [
                'name' => [
            'rules' => 'required|min_length[5]|max_length[100]',
            'errors' => [
                'required' => 'Nama lengkap wajib di cc',
                'min_length' => 'Nama lengkap minimal 3 karakter.',
                'max_length' => 'Nama lengkap maksimal 255 karakter.'
            ]
        ],
        'nik' => [
            'rules' => 'required|numeric|min_length[16]|max_length[16]|is_unique[data_diri.nik]',
            'errors' => [
                'required' => 'NIK wajib diisi.',
                'numeric' => 'NIK harus berupa angka.',
                'min_length' => 'NIK harus terdiri dari 16 angka.',
                'max_length' => 'NIK harus terdiri dari 16 angka.',
                'is_unique' => 'NIK Sudah Terdaftar'
            ]
        ],
        'noHp' => [
            'rules' => 'required|numeric|min_length[10]|max_length[15]|is_unique[data_diri.noHp]',
            'errors' => [
                'required' => 'Nomor HP wajib diisi.',
                'numeric' => 'Nomor HP harus berupa angka.',
                'min_length' => 'Nomor HP minimal 10 angka.',
                'max_length' => 'Nomor HP maksimal 15 angka.',
                'is_unique' => 'Nomor HP sudah Terdaftar'
            ]
        ],
        'email' => [
            'rules' => 'required|valid_email|is_unique[data_diri.email]',
            'errors' => [
                'required' => 'Email wajib diisi.',
                'valid_email' => 'Format email tidak valid.',
                'is_unique' => 'Email sudah terdaftar | Gunakan email lain'
            ]
        ],
        'jenisKelamin' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Jenis kelamin wajib dipilih.'
            ]
        ],
        'agama' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Agama wajib dipilih.'
            ]
        ],
        'tempat_lahir' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Tempat lahir wajib diisi.'
            ]
        ],
        'tanggal_lahir' => [
            'rules' => 'required|valid_date',
            'errors' => [
                'required' => 'Tanggal lahir wajib diisi.',
                'valid_date' => 'Format tanggal tidak valid.'
            ]
        ],
        'alamat' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Alamat wajib diisi.'
            ]
        ],
        'provinsi' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Provinsi wajib dipilih.'
            ]
        ],
        'kota' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Kota/Kabupaten wajib diisi.'
            ]
        ],
        'rt_rw' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'RT/RW wajib diisi.'
            ]
        ],
        'kode_pos' => [
            'rules' => 'required|numeric|min_length[4]|max_length[5]',
            'errors' => [
                'required' => 'Kode Pos wajib diisi.',
                'numeric' => 'Kode Pos harus berupa angka.',
                'min_length' => 'Kode Pos harus terdiri dari 5 angka.',
                'max_length' => 'Kode Pos harus terdiri dari 5 angka.'
            ]
        ]
    ];
                
            if (!empty( $data_diri)) {
                   if ($this->validate($rules_datadiri)) {
                 
                    $this->dataDiriModel->insert($data_diri);
                    return $this->response->setJSON([
                        'status' => 'success',
                        'icon' => 'success',
                        'model' => 'data_diri',
                        'message' => 'Data Diri Kamu Berhasil Tersimpan'
                    ]);
                } else {
                    $errors = $this->validation->getErrors();
                    foreach ($errors as $object => $value) {
                        return $this->response->setJSON([
                            'status' => 'error',
                            'erros' => $value,
                            'errors' => 'error',
                            'message' => $value
                        ]);
                    }
                }
            }

 function getModel($categoryname)
    {
        switch ($categoryname) {
            case 'data_diri':
                return $this->dataDiriModel;
            case 'pendidikan':
                return $this->PendidikanModel;
            case 'data_ortu':
                return $this->dataOrtu;
            case 'dokumen':
                return $this->DokumentModel;
            default:
                return null;
        }
    }
}
}