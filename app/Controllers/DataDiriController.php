<?php

namespace App\Controllers;

use App\Models\DataDiriModel;
use App\Models\PendidikanModel;
use App\Models\OrangTuaModel;
use App\Models\DokumentModel;
use CodeIgniter\Controller;

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

        $data = [
            'data_diri' => [
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
                'kodePos' => $this->request->getPost('kode_pos'),
            ],

            'pendidikan' => [
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
            ],

            'data_ortu' => [
                'id' => $userId,
                'nama_ayah' => $this->request->getPost('nama_ayah'),
                'pekerjaan_ayah' => $this->request->getPost('pekerjaan_ayah'),
                'pendidikan_ayah' => $this->request->getPost('pendidikan_ayah'),
                'no_hp_ayah' => $this->request->getPost('no_hp_ayah'),
                'nama_ibu' => $this->request->getPost('nama_ibu'),
                'pekerjaan_ibu' => $this->request->getPost('pekerjaan_ibu'),
                'pendidikan_ibu' => $this->request->getPost('pendidikan_ibu'),
                'no_hp_ibu' => $this->request->getPost('no_hp_ibu')
            ],
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


        if (!empty($fillData)) {
            if (!empty($fillData['data_diri'])) {
                if ($this->validation->run($fillData['data_diri'], 'data_diri')) {
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
            if (!empty($fillData['pendidikan'])) {
                if ($this->validation->run($fillData['pendidikan'], 'pendidikan')) {
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
            if (!empty($fillData['data_ortu'])) {
                if ($this->validation->run($fillData['data_ortu'], 'DataOrtuRules')) {
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
