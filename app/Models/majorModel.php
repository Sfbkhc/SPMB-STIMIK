<?php

namespace App\Models;

use CodeIgniter\Model;

class majorModel extends Model
{
    protected $table = 'jurusan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','username', 'email', 'major']; // Kolom yang diizinkan untuk diupdate
    protected $useTimestamps = true;

    // Method untuk update data berdasarkan user_id
    public function updateMajor($userId, $major)
    {
        return $this->update($userId, ['major' => $major]);
    }
}
