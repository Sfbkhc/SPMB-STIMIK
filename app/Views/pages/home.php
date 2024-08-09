<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>

<!-- Hero Section -->
<section class="hero">

    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>Penerimaan Mahasiswa Baru </h1>
        <h2>Tahun 2024/2025</h2>
        <form action="/User" method="get">
            <button class="rounded-pill">Daftar Sekarang</button>
        </form>
    </div>
</section>
<section class="sections d-flex justify-content-around">
    <div class="section-title" data-aos="fade-up">
        <h2> Pilihan Prodi</h2>
    </div>
    <div class="d-flex justify-content-around flex-wrap">
        <div class="box jurusan" data-aos="fade-right">
            <div class="icon">
                <i class="bi bi-laptop"></i>
            </div>
            <h2>Sistem Komputer (SK)</h2>
            <p>Sistem Komputer (SK) adalah bidang yang memfokuskan pada perangkat keras dan perangkat lunak komputer serta cara kerjanya dalam menjalankan aplikasi dan layanan. Mahasiswa SK mempelajari arsitektur komputer, jaringan, pemrograman, sistem operasi, keamanan komputer, dan embedded systems, mempersiapkan mereka untuk berkarir sebagai insinyur sistem, administrator jaringan, atau pengembang perangkat lunak.</p>

        </div>


        <div class="box jurusan" data-aos="fade-left">
            <div class="icon">
                <i class="bi bi-code-slash"></i>
            </div>
            <h2>Sistem Informasi (SI)</h2>
            <p>Sistem Informasi (SI) adalah bidang yang mempelajari integrasi teknologi informasi dengan kebutuhan bisnis untuk meningkatkan efisiensi operasional dan mendukung pengambilan keputusan. Mahasiswa SI mempelajari analisis dan desain sistem, manajemen basis data, e-business, keamanan informasi, serta manajemen proyek TI, sehingga siap berkarir sebagai analis sistem, manajer proyek TI, atau konsultan sistem informasi.</p>
        </div>
    </div>
</section>

<!-- Section Tahapan Proses Pendaftaran -->
<section class="process-section py-5 df">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Tahapan Proses Pendaftaran Mahasiswa Baru</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card process-card h-100">
                    <div class="card-body text-center">
                        <div class="process-icon mb-3">
                            <img src="/img/step1-icon.png" alt="Icon Step 1" class="img-fluid"> <!-- Ganti dengan path icon Anda -->
                        </div>
                        <h4 class="card-title">Registrasi Online</h4>
                        <p class="card-text">Calon mahasiswa mengisi formulir pendaftaran secara online melalui website resmi kampus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card process-card h-100">
                    <div class="card-body text-center">
                        <div class="process-icon mb-3">
                            <img src="/img/step2-icon.png" alt="Icon Step 2" class="img-fluid"> <!-- Ganti dengan path icon Anda -->
                        </div>
                        <h4 class="card-title">Verifikasi Dokumen</h4>
                        <p class="card-text">Tim administrasi memverifikasi dokumen yang telah diunggah oleh calon mahasiswa.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card process-card h-100">
                    <div class="card-body text-center">
                        <div class="process-icon mb-3">
                            <img src="/img/step3-icon.png" alt="Icon Step 3" class="img-fluid"> <!-- Ganti dengan path icon Anda -->
                        </div>
                        <h4 class="card-title">Pembayaran Biaya</h4>
                        <p class="card-text">Calon mahasiswa melakukan pembayaran biaya pendaftaran sesuai dengan ketentuan yang berlaku.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- Section Visi dan Misi -->
<!-- <section class="visi-misi-section py-5" style="background-color: #f0f0f0;"> -->

<section id="visi-misi" class="container_s">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h2 class="section-title my-1">Visi dan Misi</h2>
            <p class="section-subtitle">STIMIK Bina Bangsa</p>
        </div>
    </div>
    <div class="row mt-4 mx-3">
        <div class="col-md-6 ">
            <div class="visi-box">
                <h3 class="visi-title">Visi</h3>
                <p class="visi-text">Menjadi lembaga pendidikan tinggi yang unggul dan terdepan dalam bidang teknologi informasi dan komunikasi, berwawasan global, dan berkarakter nasional.</p>
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="misi-box">
                <h3 class="misi-title">Misi</h3>
                <ul class="misi-list">
                    <li>Menyelenggarakan pendidikan tinggi berkualitas dalam bidang teknologi informasi dan komunikasi.</li>
                    <li>Melakukan penelitian dan pengembangan ilmu pengetahuan dan teknologi yang inovatif.</li>
                    <li>Mengabdikan ilmu pengetahuan dan teknologi untuk kemajuan masyarakat dan bangsa.</li>
                    <li>Membangun karakter lulusan yang beretika, profesional, dan kompeten.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="video-background">
    <video autoplay muted loop class="background-video">
        <source src="/img/Untitled design.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="overlay">
        <div class="container text-center">
            <h5>Sekolah Tinggi manajemen Informatika & Komputer</h5>
            <h6>Tahun Anggaran 2024/2025</h6>
            <a href="/Registration" class="btn btn-success">Daftar Sekarang</a>
        </div>
    </div>
</section>

<section class="facility-section py-5 overflow-hidden">
    <div class="container">
        <div class="row">
            <h2 class="text-center mb-5" data-aos="fade-up">Fasilitas Kampus</h2>
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="facility-item">
                    <img src="/img/lab-komputer.jpg" alt="Fasilitas 1" class="mt-4">
                    <h3>Lab Komputers</h3>
                    <p>Laboratorium komputer di Kampus STIMIK Kendari adalah fasilitas unggulan yang dirancang untuk mendukung proses pembelajaran dan penelitian mahasiswa di bidang teknologi informasi dan komputer. Lab ini dilengkapi dengan berbagai perangkat keras dan perangkat lunak mutakhir untuk memastikan pengalaman belajar yang optimal bagi seluruh mahasiswa.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="facility-item">
                    <img src="/img/IMG20210904144848.jpg" alt="Fasilitas 2" class="mt-4">
                    <h3>Ruang Kelas</h3>
                    <p>Ruang kelas di Kampus STIMIK Kendari dirancang untuk menciptakan lingkungan belajar yang kondusif dan nyaman bagi mahasiswa. Dengan fasilitas modern dan tata letak yang ergonomis, setiap ruang kelas mendukung berbagai metode pengajaran dan pembelajaran yang inovatif.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="facility-item">
                    <img src="/img/IMG20210904144848.jpg" alt="Fasilitas 3" class="mt-4">
                    <h3>Perpustakaan</h3>
                    <p>Perpustakaan Kampus STIMIK Kendari adalah pusat sumber daya informasi yang didedikasikan untuk mendukung kegiatan akademik dan penelitian mahasiswa, dosen, dan staf. Dengan koleksi buku yang kaya, akses ke jurnal elektronik, dan fasilitas modern, perpustakaan ini menjadi tempat yang ideal untuk belajar, penelitian, dan pengembangan diri.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Organisasi -->
<!-- 
    <section class="org-section">
        <div class="container">
            <h2 class="text-center mb-4">Daftar Organisasi</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="org-item">
                        <img src="/img/org1.jpg" alt="Organisasi 1">
                        <h3>Organisasi Mahasiswa 1</h3>
                        <p>Deskripsi singkat mengenai organisasi mahasiswa 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="org-item">
                        <img src="/img/org2.jpg" alt="Organisasi 2">
                        <h3>Organisasi Mahasiswa 2</h3>
                        <p>Deskripsi singkat mengenai organisasi mahasiswa 2. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="org-item">
                        <img src="/img/org3.jpg" alt="Organisasi 3">
                        <h3>Organisasi Mahasiswa 3</h3>
                        <p>Deskripsi singkat mengenai organisasi mahasiswa 3. Duis aute irure dolor in reprehenderit in voluptate.</p>
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="org-item">
                        <img src="/img/org4.jpg" alt="Organisasi 4">
                        <h3>Organisasi Mahasiswa 4</h3>
                        <p>Deskripsi singkat mengenai organisasi mahasiswa 4. Excepteur sint occaecat cupidatat non proident.</p>
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="org-item">
                        <img src="/img/org5.jpg" alt="Organisasi 5">
                        <h3>Organisasi Mahasiswa 5</h3>
                        <p>Deskripsi singkat mengenai organisasi mahasiswa 5. Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="org-item">
                        <img src="/img/org6.jpg" alt="Organisasi 6">
                        <h3>Organisasi Mahasiswa 6</h3>
                        <p>Deskripsi singkat mengenai organisasi mahasiswa 6. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<div class="container py-5" id="LOG_IN">
    <div class="login-section">
        <h2 class="mb-4 text-center">Login</h2>
        <form>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
                <label for="floatingEmail">Email address</label>
            </div>
            <div class="form-floating mb-4">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" type="submit">Login</button>
            </div>
        </form>
    </div>
</div>

<button id="backToTopBtn" title="Go to top">
    <img src="https://img.icons8.com/?size=100&id=39787&format=png&color=000000" width="15" height="10" alt="">
</button>

<?php $this->endSection(); ?>