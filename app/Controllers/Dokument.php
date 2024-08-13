<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DokumentModel;

class Dokument extends Controller
{
    protected $validation;
    protected $DokumentModel;
    protected $session;

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->DokumentModel = new DokumentModel();
        $this->session = \Config\Services::session();
    }

    public function Submit()
    {
        if ($this->request->getMethod() === "POST") {
            $validationRules = [
                'fotoKTP' => [
                    'rules' => 'uploaded[fotoKTP]|is_image[fotoKTP]|mime_in[fotoKTP,image/jpg,image/jpeg,image/png]|max_size[fotoKTP,2048]',
                    'errors' => [
                        'uploaded' => 'Foto KTP harus diunggah.',
                        'is_image' => 'Foto KTP harus berupa file gambar yang valid.',
                        'mime_in' => 'Format foto KTP harus JPEG, JPG, atau PNG.',
                        'max_size' => 'Ukuran foto KTP maksimal 2MB.'
                    ],
                ],
                'fotoKK' => [
                    'rules' => 'uploaded[fotoKK]|is_image[fotoKK]|mime_in[fotoKK,image/jpg,image/jpeg,image/png]|max_size[fotoKK,2048]',
                    'errors' => [
                        'uploaded' => 'Foto KK harus diunggah.',
                        'is_image' => 'Foto KK harus berupa file gambar yang valid.',
                        'mime_in' => 'Format foto KK harus JPEG, JPG, atau PNG.',
                        'max_size' => 'Ukuran foto KK maksimal 2MB.'
                    ],
                ],
                'fotoSKHU' => [
                    'rules' => 'uploaded[fotoSKHU]|is_image[fotoSKHU]|mime_in[fotoSKHU,image/jpg,image/jpeg,image/png]|max_size[fotoSKHU,2048]',
                    'errors' => [
                        'uploaded' => 'Foto SKHU harus diunggah.',
                        'is_image' => 'Foto SKHU harus berupa file gambar yang valid.',
                        'mime_in' => 'Format foto SKHU harus JPEG, JPG, atau PNG.',
                        'max_size' => 'Ukuran foto SKHU maksimal 2MB.'
                    ],
                ],
                'fotoIjazah' => [
                    'rules' => 'uploaded[fotoIjazah]|is_image[fotoIjazah]|mime_in[fotoIjazah,image/jpg,image/jpeg,image/png]|max_size[fotoIjazah,2048]',
                    'errors' => [
                        'uploaded' => 'Foto Ijazah harus diunggah.',
                        'is_image' => 'Foto Ijazah harus berupa file gambar yang valid.',
                        'mime_in' => 'Format foto Ijazah harus JPEG, JPG, atau PNG.',
                        'max_size' => 'Ukuran foto Ijazah maksimal 2MB.'
                    ],
                ],
                'pasFoto' => [
                    'rules' => 'uploaded[pasFoto]|is_image[pasFoto]|mime_in[pasFoto,image/jpg,image/jpeg,image/png]|max_size[pasFoto,2048]',
                    'errors' => [
                        'uploaded' => 'Pas Foto harus diunggah.',
                        'is_image' => 'Pas Foto harus berupa file gambar yang valid.',
                        'mime_in' => 'Format Pas Foto harus JPEG, JPG, atau PNG.',
                        'max_size' => 'Ukuran Pas Foto maksimal 2MB.'
                    ],
                ]
            ];

            $username = $this->session->get('user_name');
            if ($this->validate($validationRules)) {
                $files = $this->request->getFiles();
                $uploadedFiles = [];
                $userDir = WRITEPATH . 'uploads/' . $username;

                // Buat direktori jika belum ada
                if (!is_dir($userDir)) {
                    mkdir($userDir, 0777, true);
                }
                
                $id = $this->session->get('user_id');
                $dokumenData = [];

                foreach ($files as $key => $file) {
                    if ($file->isValid() && !$file->hasMoved()) {
                        $newName = $file->getRandomName();
                        $file->move($userDir, $newName);

                        // Simpan data file ke array
                       $dokumenData = [
                            'id' => $id, // ID unik dokumen, sesuaikan sesuai kebutuhan
                        
                            // Foto KTP
                            'foto_ktp' => $files['fotoKTP']->getName(), // Nama file untuk foto KTP
                            'foto_ktp_type' => $files['fotoKTP']->getClientMimeType(), // Tipe MIME untuk foto KTP
                            'foto_ktp_size' => $files['fotoKTP']->getSize(), // Ukuran file untuk foto KTP dalam byte
                        
                            // Foto KK
                            'foto_kk' => $files['fotoKK']->getName(), // Nama file untuk foto KK
                            'foto_kk_type' => $files['fotoKK']->getClientMimeType(), // Tipe MIME untuk foto KK
                            'foto_kk_size' => $files['fotoKK']->getSize(), // Ukuran file untuk foto KK dalam byte
                        
                            // Foto SKHU
                            'foto_skhu' => $files['fotoSKHU']->getName(), // Nama file untuk foto SKHU
                            'foto_skhu_type' => $files['fotoSKHU']->getClientMimeType(), // Tipe MIME untuk foto SKHU
                            'foto_skhu_size' => $files['fotoSKHU']->getSize(), // Ukuran file untuk foto SKHU dalam byte
                        
                            // Foto Ijazah
                            'foto_ijazah' => $files['fotoIjazah']->getName(), // Nama file untuk foto Ijazah
                            'foto_ijazah_type' => $files['fotoIjazah']->getClientMimeType(), // Tipe MIME untuk foto Ijazah
                            'foto_ijazah_size' => $files['fotoIjazah']->getSize(), // Ukuran file untuk foto Ijazah dalam byte
                        
                            // Pas Foto
                            'pas_foto' => $files['pasFoto']->getName(), // Nama file untuk Pas Foto
                            'pas_foto_type' => $files['pasFoto']->getClientMimeType(), // Tipe MIME untuk Pas Foto
                            'pas_foto_size' => $files['pasFoto']->getSize() / 1024, // Ukuran file untuk Pas Foto dalam byte
                        
                            'created_at' => date('Y-m-d H:i:s'), // Tanggal dan waktu pembuatan
                            'updated_at' => date('Y-m-d H:i:s')  // Tanggal dan waktu terakhir diperbarui
                        ];

                    }
                }

                // Tambahkan ID, created_at, dan updated_at
                $dokumenData = array_merge([
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ], $dokumenData);

                try {
                    // Simpan data dokumen ke database
                    $this->DokumentModel->insert($dokumenData);

                    return $this->response->setJSON([
                        'status' => 'success',
                        'message' => 'Data dokumen berhasil disimpan.',
                        'icon' => 'success'
                    ]);
                } catch (\Exception $e) {
                    // Menangani jika terjadi kesalahan saat menyimpan data
                    return $this->response->setJSON([
                        'status' => 'error',
                        'message' => 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage(),
                        'icon' => 'error'
                    ]);
                }
            } else {
                $errors = $this->validation->getErrors();
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => array_shift($errors),
                    'icon' => 'info'
                ]);
            }
        }

        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Tidak Terkirim Dengan Benar',
            'icon' => 'info'
        ]);
    }
}
