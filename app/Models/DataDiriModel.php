<?php

namespace App\Models;

use CodeIgniter\Model;

class DataDiriModel extends Model
{
    protected $table      = 'data_diri'; // Nama tabel
    protected $primaryKey = 'nik'; // Nama primary key

    // Daftar field yang diizinkan untuk diinsert/update
    protected $allowedFields = [
        'id',
        'name',
        'nik',
        'noHp',
        'email',
        'jenisKelamin',
        'agama',
        'tempatLahir',
        'tanggalLahir',
        'alamat',
        'provinsi',
        'kotaKabupaten',
        'rtRw',
        'kodePos'
    ];

    // Mendefinisikan tipe data untuk setiap kolom
    protected $validationRules = [
        'name' => 'required|string',
        'nik' => 'required|string|max_length[20]',
        'noHp' => 'permit_empty|string|max_length[15]',
        'email' => 'permit_empty|valid_email',
        'jenisKelamin' => 'permit_empty|in_list[Laki-laki,Perempuan]',
        'agama' => 'permit_empty|in_list[Islam,Kristen,Katolik,Hindu,Buddha,Konghucu]',
        'tempatLahir' => 'permit_empty|string|max_length[100]',
        'tanggalLahir' => 'permit_empty|valid_date',
        'alamat' => 'permit_empty|string',
        'provinsi' => 'permit_empty|string|max_length[100]',
        'kotaKabupaten' => 'permit_empty|string|max_length[100]',
        'rtRw' => 'permit_empty|string|max_length[10]',
        'kodePos' => 'permit_empty|string|max_length[10]'
    ];

    // Mendefinisikan pesan kesalahan validasi
    protected $validationMessages = [
        'name' => [
            'required' => 'Nama lengkap harus diisi.',
            'string' => 'Nama lengkap harus berupa teks.'
        ],
        'nik' => [
            'required' => 'NIK harus diisi.',
            'string' => 'NIK harus berupa teks.',
            'max_length' => 'NIK tidak boleh lebih dari 20 karakter.'
        ],
        // Tambahkan pesan kesalahan lainnya sesuai kebutuhan
    ];

    // Mendefinisikan atribut yang perlu diubah waktu tertentu (misalnya waktu pembaruan)
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data)
    {
        $data = $this->setDateFields($data);
        return $data;
    }

    protected function beforeUpdate(array $data)
    {
        $data = $this->setDateFields($data);
        return $data;
    }

    private function setDateFields(array $data)
    {
        if (isset($data['data']['tanggalLahir'])) {
            $data['data']['tanggalLahir'] = date('Y-m-d', strtotime($data['data']['tanggalLahir']));
        }
        return $data;
    }

    // custom insert

    public function inputmodel($data) {}

    // Fungsi untuk insert data
    public function insertData($data)
    {
        if ($this->validate($data)) {
            return $this->insert($data);
        } else {
            return $this->errors();
        }
    }

    // Fungsi untuk update data
    public function updateData($id, $data)
    {
        if ($this->validate($data)) {
            return $this->update($id, $data);
        } else {
            return $this->errors();
        }
    }

    // Fungsi untuk delete data
    public function deleteData($id)
    {
        return $this->delete($id);
    }
}
