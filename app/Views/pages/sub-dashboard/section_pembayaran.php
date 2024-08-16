<div id="Pembayaran" class="content-section" style="display: none;">
    <?php if ($jurusan): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong></strong><span id="message_verivikasi"></span>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <section>
  <div class="container py-5">
    <div class="card">
      <div class="card-body">
        <div class="row d-flex justify-content-center pb-5">
          <div class="col-md-7 col-xl-5 mb-4 mb-md-0">
            <div class="py-4 d-flex flex-row">
              <h5><span class="far fa-check-square pe-2"></span><b>TERSEDIA</b> |</h5>
              <span class="ps-2">Bayar</span>
            </div>
            <h4 class="text-success">Rp 150.000</h4>
            <h4>Pendaftaran Mahasiswa Baru</h4>
            <p><b>Nama Peserta: </b> <?= $users['username']; ?></p> 
            <p><b>Nomor Peserta: </b> <?= $users['id']; ?></p> 
            <p>
              <b>Tanggung Jawab Peserta <span class="text-success">Rp 150.000</span></b>
            </p>
            <p>
              Pembayaran ini berlaku untuk pendaftaran mahasiswa baru dan harus dibayar menggunakan Virtual Account yang tersedia.
            </p>
            <div class="pt-2">
              <form class="pb-3">
                <div class="d-flex flex-row pb-3">
                  <div class="d-flex align-items-center pe-2">
                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="..." checked />
                  </div>
                  <div class="rounded border d-flex w-100 p-3 align-items-center">
                    <p class="mb-0">
                      <i class="fas fa-university fa-lg text-primary pe-2"></i>Virtual Account
                    </p>
                    <div class="ms-auto">No. VA: 1234567890</div>
                  </div>
                </div>
              </form>
              <input type="button" value="Lanjutkan ke Pembayaran" data-mdb-ripple-init class="btn btn-primary btn-block btn-lg" />
            </div>
          </div>

          <div class="col-md-5 col-xl-4 offset-xl-1">
            <div class="py-4 d-flex justify-content-end">
              <h6><a href="#!">Batalkan dan kembali ke situs</a></h6>
            </div>
            <div class="rounded d-flex flex-column p-2 bg-body-tertiary">
              <div class="p-2 me-3">
                <h4>Ringkasan Pesanan</h4>
              </div>
              <div class="p-2 d-flex">
                <div class="col-8">Harga Pendaftaran</div>
                <div class="ms-auto">Rp 150.000</div>
              </div>
              <div class="border-top px-2 mx-2"></div>
              <div class="p-2 d-flex pt-3">
                <div class="col-8"><b>Total</b></div>
                <div class="ms-auto"><b class="text-success">Rp 150.000</b></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>