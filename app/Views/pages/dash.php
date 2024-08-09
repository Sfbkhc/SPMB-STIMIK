<?= $this->extend('/layout/template-dashboard'); ?>

<?= $this->section('content'); ?>

<!-- Main content -->
<main id="main-content" class="content">

    <!-- Breadcrumb -->
    <?php include __DIR__ . '/sub-dashboard/section_breadcrumb.php'; ?>
    <!-- END -->

    <!-- HOME -->
    <?php include __DIR__ . '/sub-dashboard/section_home.php'; ?>
    <!-- END -->

    <!-- Detail ACCOUNt -->
    <?php include __DIR__ . '/sub-dashboard/section_data_diri.php'; ?>
    <!-- END -->

    <!-- pengunguman -->
    <?php include __DIR__ . '/sub-dashboard/section_pengunguman.php'; ?>
    <!-- END -->

    <!-- Pembyaran  -->
    <?php require __DIR__ . '/sub-dashboard/section_pembayaran.php'; ?>
    <!-- end -->
    <!-- Dokument -->
    <?php require __DIR__ . '/sub-dashboard/section_dokument.php'; ?>
    <!-- end -->
    <!-- Panduan -->
    <?php require __DIR__ . '/sub-dashboard/section-panduan.php'; ?>
    <!-- end -->
    <!-- kontak bantuan  -->
    <?php require __DIR__ . '/sub-dashboard/section-kontak.php'; ?>
    <!-- end -->
    <div id="LogOut" class="content-section" style="display: none;">
    </div>

</main>
</div>
</div>
<?= $this->endSection(); ?>