<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Page Heading -->
<div class="container-fluid">
    <h1 class="h4 mb-2 text-gray-800">Sales Force</h1>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('pesan');  ?>
        </div>
    <?php endif; ?>
    <!-- DataTables Customer -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">User ID</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Witel</th>
                                        <th scope="col">Telp</th>
                                        <th scope="col">Mitra</th>
                                        <th scope="col">Posisi</th>
                                        <th scope="col">Aktif</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($salesSpv as $row => $s) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $s['userID'] ?></td>
                                            <td><?php echo $s['nama_sales'] ?></td>
                                            <td><?php echo $s['witel'] ?></td>
                                            <td><?php echo $s['no_telp'] ?></td>
                                            <td><?php echo $s['mitra'] ?></td>
                                            <td><?php echo $s['posisi'] ?></td>
                                            <td><?php echo $s['tgl_aktif'] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>