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

                foreach ($files as $key => $file) {
                    if ($file->isValid() && !$file->hasMoved()) {
                        $newName = $file->getRandomName(); // Menggunakan nama acak untuk menghindari duplikasi nama
                        $file->move($userDir, $newName);
                        $uploadedFiles[] = $newName;
                    }
                }

                if (!empty($uploadedFiles)) {
                    return $this->response->setJSON([
                        'status' => 'success',
                        'message' => 'Berhasil',
                        'uploaded_files' => $uploadedFiles,
                        'icon' => 'success'
                    ]);
                } else {
                    return $this->response->setJSON([
                        'status' => 'error',
                        'message' => 'Terjadi kesalahan saat mengupload file',
                        'icon' => 'error'
                    ]);
                }
            } else {
                $errors = $this->validation->getErrors();
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => $errors,
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
