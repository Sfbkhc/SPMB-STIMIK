<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;

class MajorController extends Controller
{
    protected $session;
    public function submitMajor()
    {
        $request = service('request');
        
       
        
       $this->session = \Config\Services::session();

        // Ambil data dari POST request
        $major = $request->getPost('major');
        $userId = session()->get('user_id'); 

        // Validasi data (Opsional)
        if (empty($major)) {
            return $this->respond([
                'status' => 'error',
                'message' => 'Jurusan tidak boleh kosong',
                'icon' => 'error'
            ]);
        }

      
        $model = new \App\Models\majorModel(); 

        $id = $this->session->get('user_id');
        $updateData = [
            'id' =>$this->session->get('user_id'),
            'username' => $this->session->get('user_name'),
            'email' => $this->session->get('user_email'),
            'major' => $major
        ];

        if (!$model->insert($updateData)) {
            return $this->respond([
                'status' => 'success',
                'message' => 'Jurusan berhasil disimpan',
                'icon' => 'success'
            ]);
        } else {
            return $this->respond([
                'status' => 'error',
                'message' => 'Gagal menyimpan jurusan',
                'icon' => 'error'
            ]);
        }
    }

    private function respond(array $response): ResponseInterface
    {
        return $this->response->setJSON($response);
    }
}
