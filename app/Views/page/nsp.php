<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="card mt-3">
        <!-- <div class="card-header mt-2">
            <h3>DATA MATERI</h3>
        </div> -->
        <div class="card-body p-3">
            <!-- coba tab -->
            <nav>
                <div class="nav nav-tabs" id="nav-tab">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab">PANDUAN MOTION H2</a>
                    <!-- <a class="nav-item nav-link" id="nav-profil-tab" data-toggle="tab" href="#nav-profil" role="tab">ASMO ID</a> -->
                    <!-- <a class="nav-item nav-link" id="nav-kontak-tab" data-toggle="tab" href="#nav-kontak" role="tab">Kontak</a> -->
                </div>
            </nav>
            <div class="tab-content mt-2" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel">
                    <table class="table table-bordered mt-2">
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
                                    <td><?= $row->group_materi; ?></td>
                                    <td>
                                        <a class="btn btn-warning btn-sm" href="<?= base_url(); ?>/materi/preview/<?= $row->id; ?>">Baca</a>
                                        <a class="btn btn-info btn-sm" href="<?= base_url(); ?>/materi/download/<?= $row->nama_materi; ?>">Download</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- coba tab -->

        </div>
    </div>
</div>

<?= $this->endSection(); ?>