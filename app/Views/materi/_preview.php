<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="card mt-3">

        <div class="card-header">
            <h2>PREVIEW</h2>
        </div>
        <div class="card-body">
            <!-- <a class="btn btn-info " href="<?= base_url(); ?>/materi/index">back</a> -->
            <?php

            // The location of the PDF file
            // on the server
            $filename = 'upload/$materi->id';

            // Header content type
            header("Content-type: application/pdf");

            header("Content-Length: " . filesize($filename));

            // Send the file to the browser.
            readfile($filename);
            ?>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>