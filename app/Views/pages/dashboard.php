<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mahasiswa Baru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Plus+Jakarta+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/dashboard.css">
    <!-- <script src="/js/mininav.js"></script> -->
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    <!-- STR NAV MINI -->
    <div class="my-sidebar" id="mySidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#" data-content="home-content">
                    <span class="nav-icon"><i class="bi bi-house-door"></i></span>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-content="status-content">
                    <span class="nav-icon"><i class="bi bi-person-check"></i></span>
                    <span>Detail Accout</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-content="pengumuman-content">
                    <span class="nav-icon"><i class="bi bi-megaphone"></i></span>
                    <span>Pengumuman</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-content="pembayaran-content">
                    <span class="nav-icon"><i class="bi bi-cash"></i></span>
                    <span>Pembayaran</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-content="dokumentasi-content">
                    <span class="nav-icon"><i class="bi bi-folder"></i></span>
                    <span>Dokument</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-content="panduan-content">
                    <span class="nav-icon"><i class="bi bi-question-circle"></i></span>
                    <span>Panduan dan FAQ</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-content="kontak-content">
                    <span class="nav-icon"><i class="bi bi-telephone"></i></span>
                    <span>Kontak Bantuan</span>
                </a>
            </li>
        </ul>
    </div>
    <button class="my-toggle-btn collapsed" id="myToggleBtn">
        <i class="bi bi-arrow-right"></i>
    </button>

    <!-- NV END -->
    <div class="sidebar-toggle"></div>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="sidebar d-md-block">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" data-content="home-content">
                                <span class="nav-icon"><i class="bi bi-house-door"></i></span>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-content="status-content">
                                <span class="nav-icon"><i class="bi bi-person-check"></i></span>
                                <span>Detail Account</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-content="pengumuman-content">
                                <span class="nav-icon"><i class="bi bi-megaphone"></i></span>
                                <span>Pengumuman</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-content="pembayaran-content">
                                <span class="nav-icon"><i class="bi bi-cash"></i></span>
                                <span>Pembayaran</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-content="dokumentasi-content">
                                <span class="nav-icon"><i class="bi bi-folder"></i></span>
                                <span>Dokument</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-content="panduan-content">
                                <span class="nav-icon"><i class="bi bi-question-circle"></i></span>
                                <span>Panduan dan FAQ</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-content="kontak-content">
                                <span class="nav-icon"><i class="bi bi-telephone"></i></span>
                                <span>Kontak Bantuan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Main content -->
            <main id="main-content" class="content">
                <div class="breadcrumb-container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mybreadcrumb">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>

                <div id="home-content" class="content-section">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                        <h1 class="h2">Welcome <?= $name; ?></h1>
                    </div>
                    <div class="container mt-4">
                        <h4>Alur Pendaftaran</h4>
                        <p>
                            Berikut adalah Alur yang perlu Anda ikuti untuk menyelesaikan pendaftaran
                        </p>
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="progress-bar-container">
                                <div class="progress-step active" data-content="Detail Account">
                                    <div class="progress-bullet">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="progress-content">
                                        <span>Data Pribadi</span>
                                    </div>
                                </div>
                                <div class="progress-arrow"></div>
                                <div class="progress-step active" data-content="data-orang-tua-content">
                                    <div class="progress-bullet">
                                        <i class="bi bi-person-fill"></i>
                                    </div>
                                    <div class="progress-content">
                                        <span>Data Orang Tua</span>
                                    </div>
                                </div>
                                <div class="progress-arrow"></div>
                                <div class="progress-step active" data-content="dokumen-content">
                                    <div class="progress-bullet">
                                        <i class="bi bi-file-earmark-text"></i>
                                    </div>
                                    <div class="progress-content">
                                        <span>Dokumen Pelengkap</span>
                                    </div>
                                </div>
                                <div class="progress-arrow"></div>
                                <div class="progress-step active" data-content="jurusan-content">
                                    <div class="progress-bullet">
                                        <i class="bi bi-journal-text"></i>
                                    </div>
                                    <div class="progress-content">
                                        <span>Memilih Jurusan</span>
                                    </div>
                                </div>
                                <div class="progress-arrow"></div>
                                <div class="progress-step active" data-content="verifikasi-content">
                                    <div class="progress-bullet">
                                        <i class="bi bi-send"></i>
                                    </div>
                                    <div class="progress-content">
                                        <span>Verifikasi Data</span>
                                    </div>
                                </div>
                                <div class="progress-arrow"></div>
                                <div class="progress-step active" data-content="pembayaran-content">
                                    <div class="progress-bullet">
                                        <i class="bi bi-cash"></i>
                                    </div>
                                    <div class="progress-content">
                                        <span>Pembayaran</span>
                                    </div>
                                </div>
                                <div class="progress-arrow"></div>
                                <div class="progress-step active" data-content="nomor-peserta-content">
                                    <div class="progress-bullet">
                                        <i class="bi bi-ticket"></i>
                                    </div>
                                    <div class="progress-content">
                                        <span>Nomor Peserta</span>
                                    </div>
                                </div>
                                <div class="progress-arrow"></div>
                                <div class="progress-step active" data-content="seleksi-content">
                                    <div class="progress-bullet">
                                        <i class="bi bi-clipboard-check"></i>
                                    </div>
                                    <div class="progress-content">
                                        <span>Seleksi</span>
                                    </div>
                                </div>
                                <div class="progress-arrow"></div>
                                <div class="progress-step active" data-content="pengumuman-content">
                                    <div class="progress-bullet">
                                        <i class="bi bi-bell"></i>
                                    </div>
                                    <div class="progress-content">
                                        <span>Pengumuman</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Status Details -->
                        <div class="container mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h5 class="card-title">Detail Status Pendaftaran <span id="completion-percentage">0%</span></h5>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group">
                                                <!-- Detail Data Pribadi -->
                                                <li class="list-group-item">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span>Melengkapi Data Pribadi</span>
                                                        <button class="btn btn-link btn-sm" data-toggle="collapse" data-target="#data-pribadi-detail">
                                                            <i class="bi bi-chevron-down"></i>
                                                        </button>
                                                    </div>
                                                    <div id="data-pribadi-detail" class="collapse">
                                                        <ul class="list-unstyled mt-2">
                                                            <li>Nama Lengkap: <?= isset($userData['fullName']) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
                                                            <li>Tempat, Tanggal Lahir: <?= isset($userData['birthPlaceDate']) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
                                                            <li>Alamat: <?= isset($userData['address']) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
                                                            <!-- Tambah detail lainnya sesuai kebutuhan -->
                                                        </ul>
                                                    </div>
                                                </li>
                                                <!-- Detail Data Orang Tua -->
                                                <li class="list-group-item">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span>Melengkapi Data Orang Tua</span>
                                                        <button class="btn btn-link btn-sm" data-toggle="collapse" data-target="#data-orang-tua-detail">
                                                            <i class="bi bi-chevron-down"></i>
                                                        </button>
                                                    </div>
                                                    <div id="data-orang-tua-detail" class="collapse">
                                                        <ul class="list-unstyled mt-2">
                                                            <li>Nama Ayah: <?= isset($parentData['fatherName']) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
                                                            <li>Nama Ibu: <?= isset($parentData['motherName']) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
                                                            <li>Alamat Orang Tua: <?= isset($parentData['parentAddress']) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
                                                            <!-- Tambah detail lainnya sesuai kebutuhan -->
                                                        </ul>
                                                    </div>
                                                </li>
                                                <!-- Detail Dokumen Pelengkap -->
                                                <li class="list-group-item">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span>Dokumen Pelengkap</span>
                                                        <button class="btn btn-link btn-sm" data-toggle="collapse" data-target="#dokumen-detail">
                                                            <i class="bi bi-chevron-down"></i>
                                                        </button>
                                                    </div>
                                                    <div id="dokumen-detail" class="collapse">
                                                        <ul class="list-unstyled mt-2">
                                                            <li>KTP: <?= isset($documents['ktp']) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
                                                            <li>Ijazah: <?= isset($documents['diploma']) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
                                                            <li>Foto: <?= isset($documents['photo']) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
                                                            <!-- Tambah detail lainnya sesuai kebutuhan -->
                                                        </ul>
                                                    </div>
                                                </li>
                                                <!-- Detail Pilihan Jurusan -->
                                                <li class="list-group-item">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span>Memilih Jurusan</span>
                                                        <button class="btn btn-link btn-sm" data-toggle="collapse" data-target="#pilihan-jurusan-detail">
                                                            <i class="bi bi-chevron-down"></i>
                                                        </button>
                                                    </div>
                                                    <div id="pilihan-jurusan-detail" class="collapse">
                                                        <ul class="list-unstyled mt-2">
                                                            <li>Jurusan Pilihan: <?= isset($selectedMajor) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <!-- Detail Verifikasi Data -->
                                                <li class="list-group-item">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span>Verifikasi Data</span>
                                                        <button class="btn btn-link btn-sm" data-toggle="collapse" data-target="#verifikasi-data-detail">
                                                            <i class="bi bi-chevron-down"></i>
                                                        </button>
                                                    </div>
                                                    <div id="verifikasi-data-detail" class="collapse">
                                                        <ul class="list-unstyled mt-2">
                                                            <li>Data Tervalidasi: <?= isset($dataVerified) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <!-- Detail Pembayaran -->
                                                <li class="list-group-item">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span>Pembayaran</span>
                                                        <button class="btn btn-link btn-sm" data-toggle="collapse" data-target="#pembayaran-detail">
                                                            <i class="bi bi-chevron-down"></i>
                                                        </button>
                                                    </div>
                                                    <div id="pembayaran-detail" class="collapse">
                                                        <ul class="list-unstyled mt-2">
                                                            <li>Sudah Bayar: <?= isset($paymentCompleted) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <!-- Detail Nomor Peserta -->
                                                <li class="list-group-item">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span>Nomor Peserta</span>
                                                        <button class="btn btn-link btn-sm" data-toggle="collapse" data-target="#nomor-peserta-detail">
                                                            <i class="bi bi-chevron-down"></i>
                                                        </button>
                                                    </div>
                                                    <div id="nomor-peserta-detail" class="collapse">
                                                        <ul class="list-unstyled mt-2">
                                                            <li>Nomor Peserta: <?= isset($participantNumber) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <!-- Detail Seleksi -->
                                                <li class="list-group-item">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span>Seleksi</span>
                                                        <button class="btn btn-link btn-sm" data-toggle="collapse" data-target="#seleksi-detail">
                                                            <i class="bi bi-chevron-down"></i>
                                                        </button>
                                                    </div>
                                                    <div id="seleksi-detail" class="collapse">
                                                        <ul class="list-unstyled mt-2">
                                                            <li>Ikut Seleksi: <?= isset($selectionParticipated) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <!-- Detail Pengumuman -->
                                                <li class="list-group-item">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span>Pengumuman</span>
                                                        <button class="btn btn-link btn-sm" data-toggle="collapse" data-target="#pengumuman-detail">
                                                            <i class="bi bi-chevron-down"></i>
                                                        </button>
                                                    </div>
                                                    <div id="pengumuman-detail" class="collapse">
                                                        <ul class="list-unstyled mt-2">
                                                            <li>Diterima/Tidak Diterima: <?= isset($announcementStatus) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Detail ACCOUNt -->
                <div id="status-content" class="content-section" style="display: none;">
                    <h5>Detail Status Pendaftaran</h5>
                    <div class="progress mb-3">
                        <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div id="progress-percentage" class="mb-3">0%</div>

                    <div class="accordion" id="accordionDetailAccount">
                        <!-- Data Pribadi -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingDataPribadi">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDataPribadi" aria-expanded="true" aria-controls="collapseDataPribadi">
                                    <i class="bi bi-person"></i> Data Pribadi
                                </button>
                            </h2>
                            <div id="collapseDataPribadi" class="accordion-collapse collapse show" aria-labelledby="headingDataPribadi" data-bs-parent="#accordionDetailAccount">
                                <div class="accordion-body">
                                    <div class="accordion" id="accordionDataPribadi">
                                        <!-- Data Diri -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingDataDiri">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDataDiri" aria-expanded="true" aria-controls="collapseDataDiri">
                                                    Data Diri
                                                </button>
                                            </h2>
                                            <div id="collapseDataDiri" class="accordion-collapse collapse show" aria-labelledby="headingDataDiri" data-bs-parent="#accordionDataPribadi">
                                                <div class="accordion-body">
                                                    <form id="formDataDiri">
                                                        <div class="mb-3">
                                                            <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                                                            <input type="text" class="form-control" id="namaLengkap" placeholder="Masukkan nama lengkap">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="ttl" class="form-label">Tempat, Tanggal Lahir</label>
                                                            <input type="text" class="form-control" id="ttl" placeholder="Tempat, Tanggal Lahir">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                                                            <select id="jenisKelamin" class="form-select">
                                                                <option value="laki-laki">Laki-laki</option>
                                                                <option value="perempuan">Perempuan</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                                                            <input type="text" class="form-control" id="kewarganegaraan" placeholder="Masukkan kewarganegaraan">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="nik" class="form-label">NIK</label>
                                                            <input type="text" class="form-control" id="nik" placeholder="Masukkan NIK">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="agama" class="form-label">Agama</label>
                                                            <input type="text" class="form-control" id="agama" placeholder="Masukkan agama">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Kontak -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingKontak">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKontak" aria-expanded="false" aria-controls="collapseKontak">
                                                    Kontak
                                                </button>
                                            </h2>
                                            <div id="collapseKontak" class="accordion-collapse collapse" aria-labelledby="headingKontak" data-bs-parent="#accordionDataPribadi">
                                                <div class="accordion-body">
                                                    <form id="formKontak">
                                                        <div class="mb-3">
                                                            <label for="email" class="form-label">Alamat Email</label>
                                                            <input type="email" class="form-control" id="email" placeholder="Masukkan alamat email">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="nomorTelepon" class="form-label">Nomor Telepon / Nomor WA</label>
                                                            <input type="text" class="form-control" id="nomorTelepon" placeholder="Masukkan nomor telepon atau nomor WA">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Data Pendidikan -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingDataPendidikan">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDataPendidikan" aria-expanded="false" aria-controls="collapseDataPendidikan">
                                                    Data Pendidikan
                                                </button>
                                            </h2>
                                            <div id="collapseDataPendidikan" class="accordion-collapse collapse" aria-labelledby="headingDataPendidikan" data-bs-parent="#accordionDataPribadi">
                                                <div class="accordion-body">
                                                    <form id="formDataPendidikan">
                                                        <div class="mb-3">
                                                            <label for="asalSMA" class="form-label">Asal SMA / SMK</label>
                                                            <input type="text" class="form-control" id="asalSMA" placeholder="Masukkan nama SMA / SMK">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="tahunLulus" class="form-label">Tahun Lulus</label>
                                                            <input type="text" class="form-control" id="tahunLulus" placeholder="Masukkan tahun lulus">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="jurusan" class="form-label">Jurusan</label>
                                                            <select id="jurusan" class="form-select">
                                                                <option value="ipa">IPA</option>
                                                                <option value="ips">IPS</option>
                                                                <option value="tkj">TKJ</option>
                                                                <option value="rpl">RPL</option>
                                                                <option value="dkv">DKV</option>
                                                                <option value="kriya-kayu">Kriya Kayu</option>
                                                                <option value="tekst">Tekstil</option>
                                                                <option value="kelautan">Kelautan</option>
                                                                <option value="tata-boga">Tata Boga</option>
                                                                <option value="lain-lain">Lain-lain</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Data Orang Tua -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingDataOrangTua">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDataOrangTua" aria-expanded="true" aria-controls="collapseDataOrangTua">
                                    <i class="bi bi-people"></i> Data Orang Tua
                                </button>
                            </h2>
                            <div id="collapseDataOrangTua" class="accordion-collapse collapse show" aria-labelledby="headingDataOrangTua" data-bs-parent="#accordionDetailAccount">
                                <div class="accordion-body">
                                    <form id="formDataOrangTua">
                                        <div class="mb-3">
                                            <label for="namaAyah" class="form-label">Nama Ayah</label>
                                            <input type="text" class="form-control" id="namaAyah" placeholder="Masukkan nama ayah">
                                        </div>
                                        <div class="mb-3">
                                            <label for="pekerjaanAyah" class="form-label">Pekerjaan Ayah</label>
                                            <input type="text" class="form-control" id="pekerjaanAyah" placeholder="Masukkan pekerjaan ayah">
                                        </div>
                                        <div class="mb-3">
                                            <label for="namaIbu" class="form-label">Nama Ibu</label>
                                            <input type="text" class="form-control" id="namaIbu" placeholder="Masukkan nama ibu">
                                        </div>
                                        <div class="mb-3">
                                            <label for="pekerjaanIbu" class="form-label">Pekerjaan Ibu</label>
                                            <input type="text" class="form-control" id="pekerjaanIbu" placeholder="Masukkan pekerjaan ibu">
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamatOrangTua" class="form-label">Alamat Orang Tua</label>
                                            <input type="text" class="form-control" id="alamatOrangTua" placeholder="Masukkan alamat orang tua">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nomorTeleponOrangTua" class="form-label">Nomor Telepon Orang Tua</label>
                                            <input type="text" class="form-control" id="nomorTeleponOrangTua" placeholder="Masukkan nomor telepon orang tua">
                                        </div>
                                        <button type="button" class="btn btn-primary" id="btnSimpanDataOrangTua">Tambahkan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pengumuman-content" class="content-section" style="display: none;">
                    <h2>Pengumuman</h2>
                    <!-- Content for Pengumuman -->
                </div>
                <div id="pembayaran-content" class="content-section" style="display: none;">
                    <h2>Pembayaran</h2>
                    <!-- Content for Pembayaran -->
                </div>
                <div id="dokumentasi-content" class="content-section" style="display: none;">
                    <h2>Dokumentasi</h2>
                    <!-- Content for Dokumentasi -->
                </div>
                <div id="panduan-content" class="content-section" style="display: none;">
                    <h2>Panduan dan FAQ</h2>
                    <!-- Content for Panduan dan FAQ -->
                </div>
                <div id="kontak-content" class="content-section" style="display: none;">
                    <h2>Kontak Bantuan</h2>
                    <!-- Content for Kontak Bantuan -->
                </div>
            </main>
        </div>
    </div>

    <script src="/js/mainnav.js"></script>



</body>

</html>