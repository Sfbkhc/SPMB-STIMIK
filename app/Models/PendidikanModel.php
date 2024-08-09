<?php

namespace App\Models;

use CodeIgniter\Model;

class PendidikanModel extends Model
{
    protected $table = 'pendidikan'; // Nama tabel di database
    protected $primaryKey = 'id'; // Primary key tabel
    protected $allowedFields = [
        'id',
        'nama_pendidikan',
        'nisn',
        'provinsi_pendidikan',
        'kota_kabupaten_pendidikan',
        'nama_sekolah',
        'jurusan',
        'tahun_lulus',
        'no_ijazah',
        'tanggal_ijazah',
        'nilai_un'
    ]; // Field yang boleh diisi

    // Tambahkan metode jika diperlukan
}
