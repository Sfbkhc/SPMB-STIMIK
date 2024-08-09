<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>



<!-- Konten Utama -->
<div class="bgk" style="
 position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    background-image: url('/img/joel-filipe-aK0EmfPuktA-unsplash.jpg'); 
    background-size: cover; 
    background-repeat: no-repeat;
 
 ">
	<div class="d-flex justify-content-center align-items-center vh-100" id="main-content" style="display:none;">
		<img src="/img/PMB.png" alt="Logo Kampus" class="mb-1 rounded" style="height: 60px; position: fixed; z-index: 200; margin-top: -550px;">
		<div class="container py-5" id="LOG_IN">
			<div class="login-section text-center">
				<!-- <link type="image/png" sizes="16x16" rel="icon" href=".../icons8-user-16.png"> -->
				<h2 class="mb-4">Login</h2>
				<?php if (session()->getFlashdata('error')) : ?>
					<div class="alert alert-danger">
						<?= session()->getFlashdata('error') ?>
					</div>
				<?php endif; ?>

				<form action="/User/Login" method="post">
					<div class="form-floating mb-3">
						<input type="email" name="email" class="form-control" id="floatingEmail" placeholder="nama@example.com">
						<label for="floatingEmail">Email</label>
					</div>
					<div class="form-floating mb-3">
						<input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
						<label for="floatingPassword">Password</label>
					</div>
					<div class="mb-3 text-end">
						<a href="link/to/forgot-password" class="link-primary">Lupa Password?</a>
					</div>
					<div class="form-check mb-3 text-start">
						<input type="checkbox" class="form-check-input" id="acceptTerms">
						<label class="form-check-label" for="acceptTerms">
							Saya menerima <a href="link/to/terms-and-policy" class="link-primary">Policy and Terms</a>
						</label>
					</div>
					<div class="d-grid">
						<button class="btn btn-primary btn-lg" type="submit">Login</button>
					</div>
				</form>
				<div class="mt-3">
					<p>Belum memiliki akun? <a href="/User" class="link-primary">Daftar</a></p>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- JavaScript untuk mengatur visibilitas -->


<?= $this->endSection(); ?>