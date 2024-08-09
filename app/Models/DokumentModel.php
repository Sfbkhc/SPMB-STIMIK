<?php

namespace App\Models;

use CodeIgniter\Model;

class DokumentModel extends Model
{
    protected $table = 'dokumen';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id', 'nama_file', 'path', 'tipe_file', 'ukuran'];
    protected $useTimestamps = true; // Jika menggunakan field created_at dan updated_at
}
