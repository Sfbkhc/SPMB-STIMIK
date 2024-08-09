<?php

namespace App\Models;

use CodeIgniter\Model;

class OrangTuaModel extends Model
{
    protected $table = 'data_ortu';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id',
        'nama_ayah',
        'pekerjaan_ayah',
        'pendidikan_ayah',
        'no_hp_ayah',
        'nama_ibu',
        'pekerjaan_ibu',
    ];

    // rules

}
