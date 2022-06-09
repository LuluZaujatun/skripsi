<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<!-- Custom styles for this page -->
<link href="<?php echo base_url('sb admin') ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- Page Heading -->
<div class="container">
    <h1 class="h4 mb-2 text-gray-800">Sales Order</h1>

    <!-- DataTables Customer -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Data Sales Order</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Date Input</th>
                            <th scope="col">No Order</th>
                            <th scope="col">Nama</th>
                            <th scope="col">STO</th>
                            <th scope="col">Mitra</th>
                            <th scope="col">PIC</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($custSpv as $row => $c) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $c['date_input'] ?></td>
                                <td><?php echo $c['no_order'] ?></td>
                                <td><?php echo $c['nama_cust'] ?></td>
                                <td><?php echo $c['sto'] ?></td>
                                <td><?php echo $c['mitra'] ?></td>
                                <td><?php echo $c['pic'] ?></td>
                                <td><?php echo $c['status'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>