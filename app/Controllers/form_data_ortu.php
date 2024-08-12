<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\OrangTuaModel;
class form_data_ortu  extends Controller
{
     protected $db;
     protected $session;
    public function __construct()
    {
        $this->db = new OrangTuaModel (); 
              $this->session = \Config\Services::session();
                $this->validation = \Config\Services::validation();
    }
        public function Create()
        {
            $userId = $this->session->get('user_id');
            $data_ortu = [
                'id' => $userId,
                'nama_ayah' => $this->request->getPost('nama_ayah'),
                'pekerjaan_ayah' => $this->request->getPost('pekerjaan_ayah'),
                'pendidikan_ayah' => $this->request->getPost('pendidikan_ayah'),
                'no_hp_ayah' => $this->request->getPost('no_hp_ayah'),
                'nama_ibu' => $this->request->getPost('nama_ibu'),
                'pekerjaan_ibu' => $this->request->getPost('pekerjaan_ibu'),
                'pendidikan_ibu' => $this->request->getPost('pendidikan_ibu'),
                'no_hp_ibu' => $this->request->getPost('no_hp_ibu')
        
        ];
        if (!empty($data_ortu)) {
                
            $data_ortu_rules = [ 
                'nama_ayah' => [
                    'rules' => 'required|min_length[3]|max_length[100]',
                    'errors' => [
                        'required' => 'Nama Ayah wajib diisi.',
                        'min_length' => 'Nama Ayah minimal 3 karakter.',
                        'max_length' => 'Nama Ayah maksimal 100 karakter.'
                    ]
                ],
                'pekerjaan_ayah' => [
                    'rules' => 'required|min_length[3]|max_length[100]',
                    'errors' => [
                        'required' => 'Pekerjaan Ayah wajib diisi.',
                        'min_length' => 'Pekerjaan Ayah minimal 3 karakter.',
                        'max_length' => 'Pekerjaan Ayah maksimal 100 karakter.'
                    ]
                ],
                'pendidikan_ayah' => [
                    'rules' => 'required|in_list[SD,SMP,SMA/SMK,D1,D3,S1,S2,S3]',
                    'errors' => [
                        'required' => 'Pendidikan Ayah wajib dipilih.',
                        'in_list' => 'Pendidikan Ayah harus salah satu dari: SD, SMP, SMA/SMK, D1, D3, S1, S2, S3.'
                    ]
                ],
                'no_hp_ayah' => [
                    'rules' => 'required|numeric|min_length[10]|max_length[15]',
                    'errors' => [
                        'required' => 'No. HP Ayah wajib diisi.',
                        'numeric' => 'No. HP Ayah harus berupa angka.',
                        'min_length' => 'No. HP Ayah minimal 10 karakter.',
                        'max_length' => 'No. HP Ayah maksimal 15 karakter.'
                    ]
                ],
                'nama_ibu' => [
                    'rules' => 'required|min_length[3]|max_length[100]',
                    'errors' => [
                        'required' => 'Nama Ibu wajib diisi.',
                        'min_length' => 'Nama Ibu minimal 3 karakter.',
                        'max_length' => 'Nama Ibu maksimal 100 karakter.'
                    ]
                ],
                'pekerjaan_ibu' => [
                    'rules' => 'required|min_length[3]|max_length[100]',
                    'errors' => [
                        'required' => 'Pekerjaan Ibu wajib diisi.',
                        'min_length' => 'Pekerjaan Ibu minimal 3 karakter.',
                        'max_length' => 'Pekerjaan Ibu maksimal 100 karakter.'
                    ]
                ],
                'pendidikan_ibu' => [
                    'rules' => 'required|in_list[SD,SMP,SMA/SMK,D1,D3,S1,S2,S3]',
                    'errors' => [
                        'required' => 'Pendidikan Ibu wajib dipilih.',
                        'in_list' => 'Pendidikan Ibu harus salah satu dari: SD, SMP, SMA/SMK, D1, D3, S1, S2, S3.'
                    ]
                ],
                'no_hp_ibu' => [
                    'rules' => 'required|numeric|min_length[10]|max_length[15]',
                    'errors' => [
                        'required' => 'No. HP Ibu wajib diisi.',
                        'numeric' => 'No. HP Ibu harus berupa angka.',
                        'min_length' => 'No. HP Ibu minimal 10 karakter.',
                        'max_length' => 'No. HP Ibu maksimal 15 karakter.'
                    ]
                ]
                    ];
            if ($this->validate($data_ortu_rules)) {
                $this->db->insert($data_ortu);
                return $this->response->setJSON([
                    'status' => 'success',
                    'icon' => 'success',
                    'model' => 'data_orangtua',
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
    
}
}

