<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <h2>DATA MATERI</h2>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo session()->getFlashdata('success'); ?>
                </div>
            <?php endif; ?>
            <a href="<?= base_url(); ?>/materi/create" class="btn btn-primary">Upload</a>
            <hr />
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Materi</th>
                        <th>Group</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no  = 1;
                    foreach ($materi as $row) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row->nama_materi; ?></td>
                            <td><?= $row->group; ?></td>
                            <td>
                                <a class="btn btn-warning" href="">Baca</a>
                                <a class="btn btn-info" href="<?= base_url(); ?>/materi/dwonload/<?= $row->nama_materi; ?>">Download</a>
                                <a class="btn btn-danger" href="<?= base_url(); ?>/materi/delete/<?= $row->id; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>