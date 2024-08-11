<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var list<string>
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
    // public $data_diri = [
    //     'name' => [
    //         'rules' => 'required|min_length[5]|max_length[100]',
    //         'errors' => [
    //             'required' => 'Nama lengkap wajib di ',
    //             'min_length' => 'Nama lengkap minimal 3 karakter.',
    //             'max_length' => 'Nama lengkap maksimal 255 karakter.'
    //         ]
    //     ],
    //     'nik' => [
    //         'rules' => 'required|numeric|min_length[16]|max_length[16]|is_unique[data_diri.nik]',
    //         'errors' => [
    //             'required' => 'NIK wajib diisi.',
    //             'numeric' => 'NIK harus berupa angka.',
    //             'min_length' => 'NIK harus terdiri dari 16 angka.',
    //             'max_length' => 'NIK harus terdiri dari 16 angka.',
    //             'is_unique' => 'NIK Sudah Terdaftar'
    //         ]
    //     ],
    //     'noHp' => [
    //         'rules' => 'required|numeric|min_length[10]|max_length[15]|is_unique[data_diri.noHp]',
    //         'errors' => [
    //             'required' => 'Nomor HP wajib diisi.',
    //             'numeric' => 'Nomor HP harus berupa angka.',
    //             'min_length' => 'Nomor HP minimal 10 angka.',
    //             'max_length' => 'Nomor HP maksimal 15 angka.',
    //             'is_unique' => 'Nomor HP sudah Terdaftar'
    //         ]
    //     ],
    //     'email' => [
    //         'rules' => 'required|valid_email|is_unique[data_diri.email]',
    //         'errors' => [
    //             'required' => 'Email wajib diisi.',
    //             'valid_email' => 'Format email tidak valid.',
    //             'is_unique' => 'Email sudah terdaftar | Gunakan email lain'
    //         ]
    //     ],
    //     'jenisKelamin' => [
    //         'rules' => 'required',
    //         'errors' => [
    //             'required' => 'Jenis kelamin wajib dipilih.'
    //         ]
    //     ],
    //     'agama' => [
    //         'rules' => 'required',
    //         'errors' => [
    //             'required' => 'Agama wajib dipilih.'
    //         ]
    //     ],
    //     'tempatLahir' => [
    //         'rules' => 'required',
    //         'errors' => [
    //             'required' => 'Tempat lahir wajib diisi.'
    //         ]
    //     ],
    //     'tanggalLahir' => [
    //         'rules' => 'required|valid_date',
    //         'errors' => [
    //             'required' => 'Tanggal lahir wajib diisi.',
    //             'valid_date' => 'Format tanggal tidak valid.'
    //         ]
    //     ],
    //     'alamat' => [
    //         'rules' => 'required',
    //         'errors' => [
    //             'required' => 'Alamat wajib diisi.'
    //         ]
    //     ],
    //     'provinsi' => [
    //         'rules' => 'required',
    //         'errors' => [
    //             'required' => 'Provinsi wajib dipilih.'
    //         ]
    //     ],
    //     'kotaKabupaten' => [
    //         'rules' => 'required',
    //         'errors' => [
    //             'required' => 'Kota/Kabupaten wajib diisi.'
    //         ]
    //     ],
    //     'rtRw' => [
    //         'rules' => 'required',
    //         'errors' => [
    //             'required' => 'RT/RW wajib diisi.'
    //         ]
    //     ],
    //     'kodePos' => [
    //         'rules' => 'required|numeric|min_length[4]|max_length[5]',
    //         'errors' => [
    //             'required' => 'Kode Pos wajib diisi.',
    //             'numeric' => 'Kode Pos harus berupa angka.',
    //             'min_length' => 'Kode Pos harus terdiri dari 5 angka.',
    //             'max_length' => 'Kode Pos harus terdiri dari 5 angka.'
    //         ]
    //     ]
    // ];

    public $pendidikan = [
        'nama_pendidikan' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama wajib diisi.'
            ]
        ],
        'nisn' => [
            'rules' => 'required|numeric|is_unique[pendidikan.nisn]',
            'errors' => [
                'required' => 'NISN wajib diisi.',
                'numeric' => 'NISN harus berupa angka.',
                'is_unique' => 'NISN sudah terdaftar.'
            ]
        ],
        'provinsi_pendidikan' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Provinsi pendidikan wajib diisi.'
            ]
        ],
        'kota_kabupaten_pendidikan' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Kota/Kabupaten pendidikan wajib diisi.'
            ]
        ],
        'nama_sekolah' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama sekolah wajib diisi.'
            ]
        ],
        'jurusan' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Jurusan wajib diisi.'
            ]
        ],
        'tahun_lulus' => [
            'rules' => 'required|numeric',
            'errors' => [
                'required' => 'Tahun lulus wajib diisi.',
                'numeric' => 'Tahun lulus harus berupa angka.'
            ]
        ],
        'no_ijazah' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'No ijazah wajib diisi.'
            ]
        ],
        'tanggal_ijazah' => [
            'rules' => 'required|valid_date',
            'errors' => [
                'required' => 'Tanggal ijazah wajib diisi.',
                'valid_date' => 'Tanggal ijazah harus berupa tanggal yang valid.'
            ]
        ],
        'nilai_un' => [
            'rules' => 'required|numeric',
            'errors' => [
                'required' => 'Nilai UN wajib diisi.',
                'numeric' => 'Nilai UN harus berupa angka.'
            ]
        ]
    ];
    public $DataOrtuRules = [
        'nama_ayah' => [
            'rules' => 'required|min_length[3]|max_length[100]',
            'errors' => [
                'required' => 'Nama Ayah wajib diisi.',
                'min_length' => 'Nama Ayah minimal 3 karakter.',
                'max_length' => 'Nama Ayah maksimal 100 karakter.'
            ]
        ],
        'pekerjaan_ayah' => [
            'rules' => 'required|min_length[3]|max_length[100]',
            'errors' => [
                'required' => 'Pekerjaan Ayah wajib diisi.',
                'min_length' => 'Pekerjaan Ayah minimal 3 karakter.',
                'max_length' => 'Pekerjaan Ayah maksimal 100 karakter.'
            ]
        ],
        'pendidikan_ayah' => [
            'rules' => 'required|in_list[SD,SMP,SMA/SMK,D1,D3,S1,S2,S3]',
            'errors' => [
                'required' => 'Pendidikan Ayah wajib dipilih.',
                'in_list' => 'Pendidikan Ayah harus salah satu dari: SD, SMP, SMA/SMK, D1, D3, S1, S2, S3.'
            ]
        ],
        'no_hp_ayah' => [
            'rules' => 'required|numeric|min_length[10]|max_length[15]',
            'errors' => [
                'required' => 'No. HP Ayah wajib diisi.',
                'numeric' => 'No. HP Ayah harus berupa angka.',
                'min_length' => 'No. HP Ayah minimal 10 karakter.',
                'max_length' => 'No. HP Ayah maksimal 15 karakter.'
            ]
        ],
        'nama_ibu' => [
            'rules' => 'required|min_length[3]|max_length[100]',
            'errors' => [
                'required' => 'Nama Ibu wajib diisi.',
                'min_length' => 'Nama Ibu minimal 3 karakter.',
                'max_length' => 'Nama Ibu maksimal 100 karakter.'
            ]
        ],
        'pekerjaan_ibu' => [
            'rules' => 'required|min_length[3]|max_length[100]',
            'errors' => [
                'required' => 'Pekerjaan Ibu wajib diisi.',
                'min_length' => 'Pekerjaan Ibu minimal 3 karakter.',
                'max_length' => 'Pekerjaan Ibu maksimal 100 karakter.'
            ]
        ],
        'pendidikan_ibu' => [
            'rules' => 'required|in_list[SD,SMP,SMA/SMK,D1,D3,S1,S2,S3]',
            'errors' => [
                'required' => 'Pendidikan Ibu wajib dipilih.',
                'in_list' => 'Pendidikan Ibu harus salah satu dari: SD, SMP, SMA/SMK, D1, D3, S1, S2, S3.'
            ]
        ],
        'no_hp_ibu' => [
            'rules' => 'required|numeric|min_length[10]|max_length[15]',
            'errors' => [
                'required' => 'No. HP Ibu wajib diisi.',
                'numeric' => 'No. HP Ibu harus berupa angka.',
                'min_length' => 'No. HP Ibu minimal 10 karakter.',
                'max_length' => 'No. HP Ibu maksimal 15 karakter.'
            ]
        ]
    ];

    public $dokument_rules = [
        'fotoKTP' => [

            'rules' => 'uploaded[fotoKTP]|is_image[fotoKTP]|mime_in[fotoKTP,image/jpg,image/jpeg,image/png]|max_size[fotoKTP,2048]',
            'errors' => [
                'uploaded' => 'Belum Mengupload {field}.',
                'is_image' => '{field} must be a valid image file.',
                'mime_in' => '{field} must be of type jpg, jpeg, or png.',
                'max_size' => '{field} cannot exceed 2MB in size.',
            ],
        ],
        'fotoKK' => [

            'rules' => 'uploaded[fotoKK]|is_image[fotoKK]|mime_in[fotoKK,image/jpg,image/jpeg,image/png]|max_size[fotoKK,2048]',
            'errors' => [
                'uploaded' => 'Belum Mengupload{field}.',
                'is_image' => '{field} must be a valid image file.',
                'mime_in' => '{field} must be of type jpg, jpeg, or png.',
                'max_size' => '{field} cannot exceed 2MB in size.',
            ],
        ],
        'fotoSKHU' => [

            'rules' => 'uploaded[fotoSKHU]|is_image[fotoSKHU]|mime_in[fotoSKHU,image/jpg,image/jpeg,image/png]|max_size[fotoSKHU,2048]',
            'errors' => [
                'uploaded' => 'Belum Mengupload {field}.',
                'is_image' => '{field} must be a valid image file.',
                'mime_in' => '{field} must be of type jpg, jpeg, or png.',
                'max_size' => '{field} cannot exceed 2MB in size.',
            ],
        ],
        'fotoIjazah' => [

            'rules' => 'uploaded[fotoIjazah]|is_image[fotoIjazah]|mime_in[fotoIjazah,image/jpg,image/jpeg,image/png]|max_size[fotoIjazah,2048]',
            'errors' => [
                'uploaded' => 'No file selected for {field}.',
                'is_image' => '{field} must be a valid image file.',
                'mime_in' => '{field} must be of type jpg, jpeg, or png.',
                'max_size' => '{field} cannot exceed 2MB in size.',
            ],
        ],
        'pasFoto' => [

            'rules' => 'uploaded[pasFoto]|is_image[pasFoto]|mime_in[pasFoto,image/jpg,image/jpeg,image/png]|max_size[pasFoto,2048]',
            'errors' => [
                'uploaded' => 'No file selected for {field}.',
                'is_image' => '{field} must be a valid image file.',
                'mime_in' => '{field} must be of type jpg, jpeg, or png.',
                'max_size' => '{field} cannot exceed 2MB in size.',
            ],
        ],
    ];
}
