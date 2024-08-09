<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<section class="loading-section">
    <div class="spinner-container">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <p id="message mt-3"><?= $initialText . $title ?></p>
        <script>
            // Menunggu 3 detik (3000 milidetik) sebelum menampilkan pesan baru
            setTimeout(function() {
                document.getElementById('message mt-3').innerText = '<?= $NewText; ?>';
                setTimeout(function() {
                    window.location.href = '/Login';
                }, 1000);
            }, 3000);
        </script>
    </div>
</section>
<?= $this->endSection(); ?>