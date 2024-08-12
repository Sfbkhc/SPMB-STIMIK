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
    

        $fillData = [];

        foreach ($data as $categoryname => $category) {
            foreach ($category as $key => $value) {
                if (!empty($value)) {
                    if (!isset($fillData[$categoryname])) {
                        $fillData[$categoryname] = [];
                    }
                    $fillData[$categoryname][$key] = $value;
                }
            }
        }



            if (!empty($data_diri)) {
                if ($this->validation->run($fillData['data_diri'], 'data_diri')) {
                    try {
                        //code...
                    } catch (DatabaseException $e) {
                        $this->response->setJSON([
                            'status' => 'error',
                            'erros' => $value,
                            'errors' => 'error',
                            'message' => $e->getMessage()
                        ])
                    }
                    $this->dataDiriModel->insert($fillData['data_diri']);
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
                    $this->PendidikanModel->insert($fillData['pendidikan']);
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
                if ($this->validate ($data_ortu_rules)) {
                    $this->dataOrtu->insert($fillData['data_ortu']);
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

    private function getModel($categoryname)
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
