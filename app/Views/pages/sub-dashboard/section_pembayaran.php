<div id="Pembayaran" class="content-section" style="display: none;">
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
            <tr>
                <td style="text-align:center; vertical-align:top; margin-top:-5px">
                    <span style="font-size:14px;"><strong>SLIP PEMBAYARAN/ LOGIN INFO</strong></span>
                </td>
            </tr>
            <tr>
                <td style="vertical-align:top">
                    <table border="0" cellpadding="3" cellspacing="0" style="width:100%; font-size:13px;">
                        <tbody>
                            <tr>
                                <td style="text-align:left; vertical-align:top; width:23%">Nama Peserta</td>
                                <td style="text-align:left; vertical-align:top; width:2%">:</td>
                                <td style="text-align:left; vertical-align:top; width:75%"><?= $users['username']; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left; vertical-align:top; width:23%">ID Bayar/ User ID</td>
                                <td style="text-align:left; vertical-align:top; width:2%">:</td>
                                <td style="text-align:left; vertical-align:top; width:75%">202405200<?= $users['id']; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left; vertical-align:top; width:23%">Password</td>
                                <td style="text-align:left; vertical-align:top; width:2%">:</td>
                                <td style="text-align:left; vertical-align:top; width:75%"><?= $users['password']; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left; vertical-align:top; width:23%">Jenis Pendaftaran</td>
                                <td style="text-align:left; vertical-align:top; width:2%">:</td>
                                <td style="text-align:left; vertical-align:top; width:75%">Pendaftaran Mahasiswa Baru (PROGRAM SARJANA (S1) TAHUN 2024) Jenjang S1</td>
                            </tr>
                            <tr>
                                <td style="text-align:left; vertical-align:top; width:23%">Biaya Pendaftaran</td>
                                <td style="text-align:left; vertical-align:top; width:2%">:</td>
                                <td style="text-align:left; vertical-align:top; width:75%">Rp. 150,000 (seratus lima puluh ribu)</td>
                            </tr>
                            <tr>
                                <td style="text-align:left; vertical-align:top; width:23%">Bank Tujuan/ No. Rekening/ Pemilik Rekening</td>
                                <td style="text-align:left; vertical-align:top; width:2%">:</td>
                                <td style="text-align:left; vertical-align:top; width:75%">PANIN BANK, Host to Host No. Rek Tujuan 24400225</td>
                            </tr>
                            <tr>
                                <td style="text-align:left; vertical-align:top; width:23%">Status Bayar</td>
                                <td style="text-align:left; vertical-align:top; width:2%">:</td>
                                <td style="text-align:left; vertical-align:top; width:75%">BELUM LUNAS</td>
                            </tr>
                            <tr>
                                <td style="text-align:left; vertical-align:top; width:23%">Waktu Pendaftaran</td>
                                <td style="text-align:left; vertical-align:top; width:2%">:</td>
                                <td style="text-align:left; vertical-align:top; width:75%">01-08-2024 19:45:37</td>
                            </tr>
                            <tr>
                                <td style="text-align:left; vertical-align:top; width:23%">Jenjang</td>
                                <td style="text-align:left; vertical-align:top; width:2%">:</td>
                                <td style="text-align:left; vertical-align:top; width:75%">S1</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="vertical-align:top">
                    <table border="0" cellpadding="0" cellspacing="0" style="width:100%; font-size:13px;">
                        <tbody>
                            <tr>
                                <td style="text-align:left; vertical-align:top;">
                                    <h5><strong>Cara Pembayaran :</strong></h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table border="0" cellpadding="0" cellspacing="0" style="width:100%; font-size:13px;">
                        <tbody>
                            <tr>
                                <td style="text-align:left; vertical-align:top; width:33%">
                                    <div class="metode1">Virtual Billing</div>
                                    <ul>
                                        <li>Pilih Menu Pembayaran;</li>
                                        <li>Masukkan Nomor ID sebagai tujuan;</li>
                                        <li>Akan muncul nilai tagihan pembayaran;</li>
                                        <li>Pilih Ya, transaksi selesai dan cetak bukti transaksi.</li>
                                </td>
                                <td style="text-align:left; vertical-align:top; width:33%">
                                    <div class="metode2">Melalui BANK PANIN</div>
                                    <ul>
                                        <li>Pilih Menu Transfer;</li>
                                        <li>Masukkan Nomor Rekening 900560224400225 sebagai no.rekening tujuan;</li>
                                        <li>Masukkan nominal sesuai tagihan;</li>
                                        <li>Proses transaksi, pilih YA, dan selesai.</li>
                                    </ul>
                                </td>
                                <td style="text-align:left; vertical-align:top; width:33%">
                                    <div class="metode3">Melalui BANK BCA</div>
                                    <ul>
                                        <li>Pilih Menu Transfer Antar Bank;</li>
                                        <li>Masukkan Nomor Rekening 451900560224400225 sebagai tujuan;</li>
                                        <li>Masukkan nominal sesuai tagihan;</li>
                                        <li>Proses transaksi, pilih YA, dan selesai.</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                </td>
            </tr>
            <tr>
                <td style="text-align:left; vertical-align:top;">
                    <div style="color:green; font-weight:bold; font-size:13px;">
                        *Kode PANIN BANK : 451, Kode Virtual Account : 900, Kode STIMIK : 5602.
                    </div>
                </td>
            </tr>
            <tr>
                <td style="text-align:left; vertical-align:top;"><strong>Perhatian :</strong></td>
            </tr>
            <tr>
                <td style="text-align:left; vertical-align:top;">
                    <ul>
                        <li>Simpan dan print info login ini sebagai bukti pendaftaran;</li>
                        <li>Jika telah melakukan pembayaran, login dengan memasukkan data USER ID dan PASSWORD melalui laman <a href="https://stimikkendari.ac.id/login">https://stimikkendari.ac.id/login</a>;</li>
                        <li>Proses berikutnya menunggu validasi online dari pihak panitia penyelenggara;</li>
                        <li>Jika sudah tervalidasi, lengkapi Pilihan Program Studi (prodi), finalisasi, dan cetak kartu ujian;</li>
                        <li>User ID dan Password bersifat rahasia menyangkut data peserta pendaftar;</li>
                        <li><b>Informasi lebih lanjut kunjungi website resmi kami <a href="https://stimikkendari.ac.id">https://stimikkendari.ac.id</a></b></li>
                        <li>Hubungi selama jam kantor 08.00 sd 17.00 WITA: 081913533832</li>
                    </ul>
                    <!-- Ujian Jalur Mandiri Lokal menggunakan CBT di Lab Komputer <strong>IAIN Kendari</strong> -->
                </td>
            </tr>
        </tbody>
    </table>
</div>