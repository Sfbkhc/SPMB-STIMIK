<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PendidikanModel;

class form_pendidikan extends Controller
{
    protected $db;
    public function __construct()
    {
        $this->db = new PendidikanModel ();
    }
    public function Create()
    {
        $userId = $this->session->get('user_id');
        $pendidikan = [
            'id' => $userId,
            'nama_pendidikan' => $this->request->getPost('nama_pendidikan'),
            'nisn' => $this->request->getPost('nisn'),
            'provinsi_pendidikan' => $this->request->getPost('provinsi_pendidikan'),
            'kota_kabupaten_pendidikan' => $this->request->getPost('kota_kabupaten_pendidikan'),
            'nama_sekolah' => $this->request->getPost('nama_sekolah'),
            'jurusan' => $this->request->getPost('jurusan'),
            'tahun_lulus' => $this->request->getPost('tahun_lulus'),
            'no_ijazah' => $this->request->getPost('no_ijazah'),
            'tanggal_ijazah' => $this->request->getPost('tanggal_ijazah'),
            'nilai_un' => $this->request->getPost('nilai_un')
        ];
        if (!empty($pendidikan)) {
            $rules_pendidikan = [ 
                'nama_pendidikan' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama wajib diisi.'
                    ]
                ],
                'nisn' => [
                    'rules' => 'required|numeric|is_unique[pendidikan.nisn]',
                    'errors' => [
                        'required' => 'NISN wajib diisi.',
                        'numeric' => 'NISN harus berupa angka.',
                        'is_unique' => 'NISN sudah terdaftar.'
                    ]
                ],
                'provinsi_pendidikan' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Provinsi pendidikan wajib diisi.'
                    ]
                ],
                'kota_kabupaten_pendidikan' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kota/Kabupaten pendidikan wajib diisi.'
                    ]
                ],
                'nama_sekolah' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama sekolah wajib diisi.'
                    ]
                ],
                'jurusan' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Jurusan wajib diisi.'
                    ]
                ],
                'tahun_lulus' => [
                    'rules' => 'required|numeric',
                    'errors' => [
                        'required' => 'Tahun lulus wajib diisi.',
                        'numeric' => 'Tahun lulus harus berupa angka.'
                    ]
                ],
                'no_ijazah' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'No ijazah wajib diisi.'
                    ]
                ],
                'tanggal_ijazah' => [
                    'rules' => 'required|valid_date',
                    'errors' => [
                        'required' => 'Tanggal ijazah wajib diisi.',
                        'valid_date' => 'Tanggal ijazah harus berupa tanggal yang valid.'
                    ]
                ],
                'nilai_un' => [
                    'rules' => 'required|numeric',
                    'errors' => [
                        'required' => 'Nilai UN wajib diisi.',
                        'numeric' => 'Nilai UN harus berupa angka.'
                    ]
                ]
                    ];
            if ($this->validate($rules_pendidikan)) {
                $this->PendidikanModel->insert($pendidikan);
                return $this->response->setJSON([
                    'status' => 'success',
                    'icon' => 'success',
                    'model' => 'pendidikan',
                    'message' => 'Data Diri Kamu Berhasil Tersimpan'
                ]);
            } else {
                $errors = $this->validation->getErrors();
                foreach ($errors as $object => $value) {
                    $this->session->setFlashdata('ep1', $value);
                    return $this->response->setJSON([
                        'status' => 'error',
                        'icon' => 'info',
                        'erros' => $value,
                        'errors' => 'error',
                        'message' => $value
                    ]);
                }
            }
        }

    }
}
