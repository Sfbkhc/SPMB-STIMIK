<script src="/jQuery/jquery-3.7.1.min.js"></script>
<div id="Form" class="content-section" style="display: none;">
    <table align="center" cellpadding="5" cellspacing="0" style="width:90%;" class="container mt-6">
        <tbody>
            <tr>
                <td style="text-align:left; vertical-align:top">
                    <table width="100%" align="center" style="color:black; font-size:16px; font-weight:bold;">
                        <tbody>
                            <tr>
                                <!-- <td style="color:black; vertical-align: top; width: 10%; text-align: center;">
                                    <img src="/img/STIMIK-removebg-preview.png" width="75">
                                </td> -->
                                <td style="color:black; vertical-align: top; width: 90%; text-align: center;">
                                    KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN<br>
                                    STIMIK BINA BANGSA KENDARI<br>
                                    <span style="font-weight: normal; font-size: 10px;">
                                        Jalan Jend. A.H Nasution Poros Andonohu No. 105, Kendari Sulawesi Tenggara<br>
                                        Telp/Fax. (0401) 3192081/ 3193710 email: info@stimikkendari.ac.id website: http://stimikkendari.ac.id
                                    </span>
                                    <hr>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- <div class="page-title"> Lengkapi Form Berikut... </div> -->
    <div class="container">
        <!-- Form Data Diri -->
        <form id="data_diri">
            <div class="form-section mt-3">
                <h2>Data Diri</h2>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control" id="nama" value="<?= $users['username']; ?>">
                        <p style="font-size: 8px;" class="pt-1 px-2">* Lengkapi Nama Anda</p>
                    </div>
                    <div class="col-md-6">
                        <label for="nik" class="form-label">NIK</label>
                        <input name="nik" type="text" class="form-control" id="nik" placeholder="Masukkan NIK" value="<?= old('nik'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="no_hp" class="form-label">No. HP</label>
                        <input name="noHp" type="tel" class="form-control" id="no_hp" placeholder="Masukkan nomor HP" value="<?= old('noHp'); ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="<?= $users['email']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select name="jenisKelamin" class="form-select" id="jenis_kelamin">
                            <option selected disabled>Pilih jenis kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="agama" class="form-label">Agama</label>
                        <select class="form-select" id="agama" name="agama">
                            <option selected disabled>Pilih agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" placeholder="Masukkan tempat lahir">
                    </div>
                    <div class="col-md-6">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="alamat" class="form-label">Alamat (KTP) </label>
                        <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Masukkan alamat lengkap" value="">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="provinsi" class="form-label">Provinsi</label>
                        <select name="provinsi" class="form-select" name="" id="provinsi">
                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                            <option value="Sumatera Utara">Sumatera Utara</option>
                            <option value="Sumatera Barat">Sumatera Barat</option>
                            <option value="Riau">Riau</option>
                            <option value="Jambi">Jambi</option>
                            <option value="Sumatera Selatan">Sumatera Selatan</option>
                            <option value="Bengkulu">Bengkulu</option>
                            <option value="Lampung">Lampung</option>
                            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                            <option value="DKI Jakarta">DKI Jakarta</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="DI Yogyakarta">DI Yogyakarta</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                            <option value="Banten">Banten</option>
                            <option value="Bali">Bali</option>
                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                            <option value="Sulawesi Utara">Sulawesi Utara</option>
                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                            <option value="Aceh">Aceh</option>
                            <option value="Gorontalo">Gorontalo</option>
                            <option value="Sulawesi Barat">Sulawesi Barat</option>
                            <option value="Maluku">Maluku</option>
                            <option value="Maluku Utara">Maluku Utara</option>
                            <option value="Papua">Papua</option>
                            <option value="Papua Barat">Papua Barat</option>
                            <option value="Papua Tengah">Papua Tengah</option>
                            <option value="Papua Pegunungan">Papua Pegunungan</option>
                            <option value="Papua Selatan">Papua Selatan</option>
                        </select>
                        <!-- <input type="text" class="form-control" id="provinsi" placeholder="Masukkan provinsi"> -->
                    </div>
                    <div class="col-md-6">
                        <label for="kota_kabupaten" class="form-label">Kota/Kabupaten</label>
                        <input class="form-control" type="text" id="kota" name="kota" placeholder="Masukkan Kota/Kabupaten">
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="rt_rw" class="form-label">RT/RW</label>
                        <input name="rt_rw" type="text" class="form-control" id="rt_rw" placeholder="02/08">
                    </div>
                    <div class="col-md-6">
                        <label for="kode_pos" class="form-label">Kode Pos</label>
                        <input name="kode_pos" type="text" inputmode="numeric" class="form-control" id="kode_pos" placeholder="Masukkan kode pos">
                    </div>
                </div>
                <button id="submitButton_dd" type="submit" class="btn btn-primary">Simpan</button>
                <!-- <button id="submitButton" type="submit" class="btn btn-primary">Edit</button> -->
            </div>
        </form>



        <!-- Form Pendidikan -->
        <form action="" id="pendidikan">
            <div class="form-section mt-5">
                <h2>Data Pendidikan</h2>
                <?php if (session()->getFlashdata('ep1')) : ?>
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                            <use xlink:href="#exclamation-triangle-fill" />
                        </svg>
                        <div>
                            <?= session()->getFlashdata('ep1'); ?>
                        </div>
                    </div>
                <?php endif; ?>
               
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nama_pendidikan" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama_pendidikan" name="nama_pendidikan" placeholder="Masukkan nama lengkap" value="<?= $users['username']; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="nisn" class="form-label">NISN</label>
                            <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Masukkan NISN">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="provinsi_pendidikan" class="form-label">Provinsi</label>
                            <input type="text" class="form-control" id="provinsi_pendidikan" name="provinsi_pendidikan" placeholder="Masukkan provinsi">
                        </div>
                        <div class="col-md-6">
                            <label for="kota_kabupaten_pendidikan" class="form-label">Kota/Kabupaten</label>
                            <input class="form-control" id="kota_kabupaten_pendidikan" name="kota_kabupaten_pendidikan" placeholder="Masukkan Kota/Kabupaten"></input>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                            <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" placeholder="Masukkan nama sekolah">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-select" id="jurusan" name="jurusan">
                                <option selected disabled>Pilih jurusan</option>
                                <option value="IPA">IPA</option>
                                <option value="IPS">IPS</option>
                                <option value="TKJ">TKJ</option>
                                <option value="RPL">RPL</option>
                                <option value="DKV">DKV</option>
                                <option value="TATA BOGA">TATA BOGA</option>
                                <option value="KESEHATAN">KESEHATAN</option>
                                <option value="Lain-lainnya">Lain-lainnya</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                            <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus" placeholder="Masukkan tahun lulus">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="no_ijazah" class="form-label">No Ijazah</label>
                            <input type="text" class="form-control" id="no_ijazah" name="no_ijazah" placeholder="Masukkan no ijazah">
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal_ijazah" class="form-label">Tanggal Ijazah</label>
                            <input type="date" class="form-control" id="tanggal_ijazah" name="tanggal_ijazah">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="nilai_un" class="form-label">Nilai UN</label>
                            <input type="text" class="form-control" id="nilai_un" name="nilai_un" placeholder="Masukkan nilai UN">
                        </div>
                    </div>
                    <button id="submitButton_pddk" type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>


        <!-- Form Data Orang Tua -->
        <form action="" id="data_ortu">
            <div class="form-section mt-5">
                <h2>Data Orang Tua</h2>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nama_ayah" class="form-label">Nama Ayah</label>
                            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Masukkan nama ayah">
                        </div>
                        <div class="col-md-6">
                            <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
                            <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Masukkan pekerjaan ayah">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="pendidikan_ayah" class="form-label">Pendidikan Ayah</label>
                            <select class="form-select" id="pendidikan_ayah" name="pendidikan_ayah">
                                <option selected disabled>Pilih pendidikan</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA/SMK">SMA/SMK</option>
                                <option value="D1">D1</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="no_hp_ayah" class="form-label">No. HP Ayah</label>
                            <input type="tel" class="form-control" id="no_hp_ayah" name="no_hp_ayah" placeholder="Masukkan nomor HP ayah">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nama_ibu" class="form-label">Nama Ibu</label>
                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Masukkan nama ibu">
                        </div>
                        <div class="col-md-6">
                            <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
                            <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Masukkan pekerjaan ibu">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="pendidikan_ibu" class="form-label">Pendidikan Ibu</label>
                            <select class="form-select" id="pendidikan_ibu" name="pendidikan_ibu">
                                <option selected disabled>Pilih pendidikan</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA/SMK">SMA/SMK</option>
                                <option value="D1">D1</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="no_hp_ibu" class="form-label">No. HP Ibu</label>
                            <input type="tel" class="form-control" id="no_hp_ibu" name="no_hp_ibu" placeholder="Masukkan nomor HP ibu">
                        </div>
                    </div>
                    <button id="submitButton_ortu" type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>

        <form id="uploadForm" enctype="multipart/form-data">
            <div class="form-section mb-5">
                <h2>Dokument</h2>
                <?php if (session()->getFlashdata('npost')) : ?>
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                            <use xlink:href="#exclamation-triangle-fill" />
                        </svg>
                        <div>
                            <?= session()->getFlashdata('npost'); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="">
                            <label class="form-label" for="fotoKTP">KTP</label>
                            <input class="form-control" type="file" id="KTP" name="fotoKTP" accept="image/*">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <label class="form-label" for="fotoKK">KK</label>
                            <input class="form-control" type="file" id="fotoKK" name="fotoKK" accept="image/*">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="">
                            <label class="form-label" for="fotoSKHU">SKHU/LEMBAR NILAI</label>
                            <input class="form-control" type="file" id="fotoSKHU" name="fotoSKHU" accept="image/*">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <label class="form-label" for="fotoIjazah">IJAZAH</label>
                            <input class="form-control" type="file" id="fotoIjazah" name="fotoIjazah" accept="image/*">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <label class="form-label" for="pasFoto">Pas Foto (Latar Merah/Biru)</label>
                            <input class="form-control" type="file" id="pasFoto" name="pasFoto" accept="image/*">
                            <p style="font-size: 8px;">* Harap unggah pas foto dengan latar belakang merah/biru.</p>
                        </div>
                    </div>
                </div>
                <button id="uploadButton" type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

<script>
$(document).ready(function() {
    // Fungsi untuk menangani pengiriman formulir dengan AJAX
    function submitForm(formId, url) {
        $(formId).on('submit', function(event) {
            event.preventDefault(); 

            Swal.fire({
                title: "Apa kamu yakin?",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: "Save",
                denyButtonText: `Don't save`
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url,   
 
                        type: 'POST',
                        data: $(this).serialize(), 
                        dataType: 'JSON',
                        success: function(response) {
                            if (response.status === "success") {
                                Swal.fire({
                                    title: 'Berhasil',
                                    text: 'Data kamu Sudah Tersimpan',
                                    icon: response.icon
                                });

                                // Menonaktifkan tombol setelah berhasil menyimpan
                                $(formId + ' button[type="submit"]').prop('disabled', true);
                            } else {
                                Swal.fire({
                                    title: 'Opps..',
                                    text: response.message,
                                    icon: response.icon
                                });
                            }
                        },
                        error: function() {
                            // Menangani jika terjadi kesalahan AJAX
                            Swal.fire({
                                title: 'Error!',
                                text: 'Terjadi kesalahan saat mengirim data.',
                                icon: 'error'
                            });
                        }
                    });
                } else if (result.isDenied) {
                    Swal.fire("Pastikan Semua Sudah Benar", "", "info");
                }
            });
        });
    }

    // Mendaftarkan setiap form dengan URL controller masing-masing
    submitForm('#data_diri', '/formcontroller/submitdata');
    submitForm('#pendidikan', '/formcontroller/submitdata/pendidikan');
    submitForm('#data_ortu', '/formcontroller/submitdata/data_ortu');

    // Penanganan khusus untuk form upload (FormData)
    $('#uploadForm').on('submit', function(event) {
        event.preventDefault();

        Swal.fire({
            title: "Apa kamu yakin?",
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: "Save",
            denyButtonText: `Don't save`
        }).then((result) => {
            if (result.isConfirmed)   
 {
                var formData = new FormData(this); 

                $.ajax({
                    url: '/Dokument/save', 
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.status === "success") {
                            Swal.fire({
                                title:   
 'Berhasil',
                                text: 'Data kamu Sudah Tersimpan',
                                icon: response.icon
                            });

                            // Menonaktifkan tombol setelah berhasil menyimpan
                            $('#uploadButton').prop('disabled', true); 
                        } else {
                            Swal.fire({
                                title: 'Opps..',
                                text: response.message,
                                icon: response.icon
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Terjadi kesalahan saat mengirim data.',
                            icon: 'error'
                        });
                    }
                });
            } else if (result.isDenied) {
                Swal.fire("Pastikan Semua Sudah Benar", "", "info");
            }
        });
    });
});
</script>

