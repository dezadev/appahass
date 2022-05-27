<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="card mt-3">

        <div class="card-header">
            <h2>PREVIEW</h2>
        </div>
        <div class="card-body">

            <?php //Header content type
            // dd($id);
            $fileName = 'upload/PANDUAN AHASS SYSTEM.pdf';
            header('Content-type: application/pdf');
            header('Content-Disposition: inline; filename="' . $fileName . '"');
            header('Content-Transfer-Encoding: binary');
            // header('Content-Length: ' . filesize($file));
            header('Accept-Ranges: bytes');

            // Read the file
            @readfile($file);
            ?>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>