<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="card mt-3">

        <div class="card-header">
            <h2>PREVIEW</h2>
        </div>
        <div class="card-body">
            <a class="btn btn-info " href="<?= base_url(); ?>/materi/index">back</a>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>