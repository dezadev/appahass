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
            <form method="post" action="<?= base_url(); ?>/materi/save" enctype="multipart/form-data" class="d-inline">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="nama_materi" class="form-label">Materi</label>
                    <!-- <input type="file" class="form-control" id="nama_materi" name="nama_materi"> -->
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="nama_materi" name="nama_materi" onchange="namaFile()">
                        <label class="custom-file-label" for="nama_materi">Choose file</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="group_materi" class="form-label">Group Materi</label>
                    <div>
                        <select name="group_materi" id="group_materi" class="form-control">
                            <option selected>Pilih Group</option>
                            <?php foreach ($group as $pilih) : ?>
                                <option value="<?= $pilih->group_materi; ?>"><?= $pilih->group_materi; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-danger" value="Upload" />
                </div>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>



<!-- <option value="<?= $pilih->group_materi; ?>" <?= (isset($pilih->group_materi) && $pilih->group_materi == $pilih->id) ?
                                                        'selected' : '' ?>> <?= $pilih->group_materi ?></option>