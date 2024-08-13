<?php

namespace App\Models;

use CodeIgniter\Model;

class DokumentModel extends Model
{
    protected $table = 'dokumen';
    protected $primaryKey = 'id';
     protected $allowedFields = [
            'id', 'foto_ktp', 'foto_ktp_type', 'foto_ktp_size',
            'foto_kk', 'foto_kk_type', 'foto_kk_size',
            'foto_skhu', 'foto_skhu_type', 'foto_skhu_size',
            'foto_ijazah', 'foto_ijazah_type', 'foto_ijazah_size',
            'pas_foto', 'pas_foto_type', 'pas_foto_size',
            'created_at', 'updated_at'
        ];
    protected $useTimestamps = true; // Jika menggunakan field created_at dan updated_at
}
