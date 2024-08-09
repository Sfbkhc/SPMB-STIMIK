<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="bakc" style="
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
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="container py-5" id="LOG_IN">
            <div class="login-section text-center">
                <i class="fas fa-user"></i>
                <h2 class="mb-4">Registrasi</h2>
                <form action="/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-floating mb-3">
                        <input type="name" name="name" class="form-control <?php if ($name === "Erroname") {
                                                                                echo "";
                                                                            } elseif ($name === "Nama harus di isi") {
                                                                                echo 'is-invalid';
                                                                            }; ?> " id="floatingName" value="<?= old('name'); ?> " required>
                        <label for="floatingName">Name</label>
                        <div class="text-start error-message">
                            <p><?= ($name === "Nama harus di isi") ? 'field harus terisi' : ''; ?></p>
                        </div>
                        <div style="color:red" class="text-start">
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control <?php if ($email === "Erroremail") {
                                                                                    echo "";
                                                                                } elseif ($email === "Email harus di isi") {
                                                                                    echo 'is-invalid';
                                                                                }; ?> " id="floatingEmail" value="<?= old('email'); ?>" required>
                        <label for="floatingEmail">Email</label>
                        <div class="text-start error-message">
                            <p><?= ($email === "Email harus di isi") ? 'field harus terisi' : ''; ?></p>
                        </div>

                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control <?php if ($pass === "Errorpassword") {
                                                                                        echo "";
                                                                                    } elseif ($pass === "Password harus ada !!") {
                                                                                        echo 'is-invalid';
                                                                                    }; ?>  " id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                        <div class="text-start error-message">
                            <p><?= $pass; ?></p>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingre_Password" placeholder="Konfirmasi Password" required>
                        <label for="floatingre_Password">Konfirmasi Password</label>
                    </div>


                    <div class="form-check mb-3 ml-2 text-start">
                        <input type="checkbox" class="form-check-input" id="acceptTerms">
                        <label class="form-check-label" for="acceptTerms">
                            Saya menerima <a href="link/to/terms-and-policy" class="link-primary">Policy and Terms</a>
                        </label>

                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Submit | Registrasi</button>
                    </div>

                </form>
                <div class="mt-3">
                    <p>Sudah memiliki akun? <a href="/Login" class="link-primary">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>