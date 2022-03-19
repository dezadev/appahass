<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="card mt-2">
        <div class="card-header">
            <h2>TAMBAH GROUP</h2>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url(); ?>/group/save" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="group" class="form-label">Group Materi</label>
                    <input class="form-control" id="group_materi" name="group_materi" rows="3"></input>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-danger" value="Tambah Group" />
                </div>

            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>