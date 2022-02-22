<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="card mt-2">
        <div class="card-header">
            <h2>FORM UPLOAD MATERI</h2>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url(); ?>/materi/save" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="nama_materi" class="form-label">Materi</label>
                    <input type="file" class="form-control" id="nama_materi" name="nama_materi">
                </div>
                <div class="mb-3">
                    <label for="group" class="form-label">Group Materi</label>
                    <input class="form-control" id="group" name="group" rows="3"><?= old('group'); ?></input>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-danger" value="Upload" />
                </div>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>