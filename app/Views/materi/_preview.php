<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="card mt-2">

        <div class="card-header mb-1">
            <bold>PREVIEW</bold>
        </div>
        <div class="card-body">
            <?=
                $no  = null;
            foreach ($materi as $file)
            ?>
            <iframe src="/upload/<?= $file->nama_materi; ?>" style="width:100%; height:500px;" frameborder="0"></iframe>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>