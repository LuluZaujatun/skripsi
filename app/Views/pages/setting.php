<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<!-- Page Heading -->
<div class="container">
    <h1 class="h4 mb-2 text-gray-800">Setting Points</h1>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('pesan');  ?>
        </div>
    <?php endif; ?>

    <!-- Tables -->
    <div class="card shadow mb-4">
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Indikator</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Point</th>
                            <th scope="col">Periode</th>
                            <th colspan="2" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($setting as $row => $s) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $s['indikator'] ?></td>
                                <td><?php echo $s['deskripsi'] ?></td>
                                <td><?php echo $s['point'] ?></td>
                                <td><?php echo $s['periode'] ?></td>
                                <td><a href="<?= base_url('edit-point/' . $s['id']); ?>" class="btn btn-danger btn-sm btn-circle">
                                        <i class="fas fa-pen"></i>
                                    </a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>