<div id="Dashboard" class="content-section">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome <?= $users['username']; ?></h1>
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
                            <h5 class="card-title">Detail Status Pendaftaran <span id="completion-percentage">%</span></h5>
                            <script>
                                $(document).ready(function() {
                                // Function to count icons with specific classes and calculate percentage
                                function updateIconStats() {
                                    var totalItems = $('i').length; // Total number of icons
                                    var checkedCount = $('i.bi-check-circle-fill.text-success').length; // Count of checked icons
                                    var completionPercentage = totalItems > 0 ? (checkedCount / totalItems) * 100 : 0; // Calculate percentage
                    
                                    $('#checked-icons-count').text(checkedCount); // Update checked count
                                    $('#completion-percentage').text(`${Math.round(completionPercentage)}%`); // Update percentage
                                }
                    
                                // Call the function on document ready
                                updateIconStats();
                            });
                           </script>
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
                                            <li>Nama Lengkap: <?= isset($data_diri['name']) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
                                            <li>Tempat, Tanggal Lahir: <?= isset($data_diri['tanggalLahir']) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
                                            <li>Alamat: <?= isset($data_diri['alamat']) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
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
                                            <li>Nama Ayah: <?= isset($ortu['nama_ayah']) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
                                            <li>Nama Ibu: <?= isset($ortu['nama_ibu']) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
                                            <li>Alamat Orang Tua: <?= isset($ortu) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
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
                                            <li>KTP: <?= isset($dokument['foto_ktp']) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
                                            <li>Ijazah: <?= isset($dokument['foto_ijazah']) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
                                            <li>Foto: <?= isset($dokument['pas_foto']) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Lengkap' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
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
                                            <li>Memilih Jurusan: <?= isset($jurusan) ? '<i class="bi bi-check-circle-fill text-success"></i>' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Lengkap' ?></li>
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
                                            <li>Data Tervalidasi: <?= isset($dataVerified) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Terverivikasi' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Di Verifikasi' ?></li>
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
                                            <li>Sudah Bayar: <?= isset($paymentCompleted) ? '<i class="bi bi-check-circle-fill text-success"></i> Sudah Membayar' : '<i class="bi bi-x-circle-fill text-danger"></i> Belum Melakukan Pembayaran' ?></li>
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
                               
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Pengumuman</span>
                                        <button class="btn btn-link btn-sm" data-toggle="collapse" data-target="#pengumuman-detail">
                                            <i class="bi bi-chevron-down"></i>
                                        </button>
                                    </div>
                                    <div id="pengumuman-detail" class="collapse">
                                        <ul class="list-unstyled mt-2">
                                            <li>Diterima/Tidak Diterima: <?= isset($announcementStatus) ? '<i class="bi bi-check-circle-fill text-success"></i> Di Terima' : '<i class="bi bi-x-circle-fill text-danger"></i> Proses' ?></li>
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