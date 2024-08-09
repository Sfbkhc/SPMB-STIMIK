<?php $this->extend('pages/sub-dashboard/home'); ?>

<?php $this->section('home'); ?>
<!-- Progress Bar -->
<div class="container">
    <div class="progress-bar-container">
        <div class="progress-step active">
            <div class="progress-bullet"></div>
            <div class="progress-content">
                <i class="bi bi-person"></i>
                <span>Data Pribadi</span>
            </div>
        </div>
        <div class="progress-arrow"></div>
        <div class="progress-step active">
            <div class="progress-bullet"></div>
            <div class="progress-content">
                <i class="bi bi-person-fill"></i>
                <span>Data Orang Tua</span>
            </div>
        </div>
        <div class="progress-arrow"></div>
        <div class="progress-step active">
            <div class="progress-bullet"></div>
            <div class="progress-content">
                <i class="bi bi-file-earmark-text"></i>
                <span>Dokumen Pelengkap</span>
            </div>
        </div>
        <div class="progress-arrow"></div>
        <div class="progress-step active">
            <div class="progress-bullet"></div>
            <div class="progress-content">
                <i class="bi bi-journal-text"></i>
                <span>Memilih Jurusan</span>
            </div>
        </div>
        <div class="progress-arrow"></div>
        <div class="progress-step active">
            <div class="progress-bullet"></div>
            <div class="progress-content">
                <i class="bi bi-send"></i>
                <span>Verifikasi Data</span>
            </div>
        </div>
        <div class="progress-arrow"></div>
        <div class="progress-step active">
            <div class="progress-bullet"></div>
            <div class="progress-content">
                <i class="bi bi-cash"></i>
                <span>Pembayaran</span>
            </div>
        </div>
        <div class="progress-arrow"></div>
        <div class="progress-step active">
            <div class="progress-bullet"></div>
            <div class="progress-content">
                <i class="bi bi-ticket"></i>
                <span>Nomor Peserta</span>
            </div>
        </div>
        <div class="progress-arrow"></div>
        <div class="progress-step active">
            <div class="progress-bullet"></div>
            <div class="progress-content">
                <i class="bi bi-clipboard-check"></i>
                <span>Seleksi</span>
            </div>
        </div>
        <div class="progress-arrow"></div>
        <div class="progress-step active">
            <div class="progress-bullet"></div>
            <div class="progress-content">
                <i class="bi bi-bell"></i>
                <span>Pengumuman</span>
            </div>
        </div>
    </div>
</div>

<!-- Detailed Steps Content -->
<div class="row mt-4">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title">Alur Pendaftaran</h5>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <!-- List Items Here -->
                </ul>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>