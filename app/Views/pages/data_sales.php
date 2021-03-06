<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Page Heading -->
<div class="container-fluid">
    <h1 class="h4 mb-2 text-gray-800">Sales Force</h1>
    <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2" href="<?= base_url('/pages/add'); ?>"> <i class="fas fa-plus"></i> Add New Sales </a>
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
                                        <th scope="col">SPV</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($sales as $row => $s) {
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
                                            <td><?php echo $s['spv'] ?></td>
                                            <td><a href="<?= base_url('edit-view/' . $s['id_sales']); ?>" class="btn btn-danger btn-sm btn-circle">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <a href="<?= base_url('delete/' . $s['id_sales']); ?>" class="btn btn-danger btn-sm btn-circle" onclick="return confirm('Are you sure?')">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
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