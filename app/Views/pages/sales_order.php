<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<!-- Custom styles for this page -->
<link href="<?php echo base_url('sb admin') ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- Page Heading -->
<div class="container">
    <h1 class="h4 mb-2 text-gray-800">Sales Order</h1>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('pesan');  ?>
        </div>
    <?php endif; ?>

    <!-- DataTables Customer -->
    <div class="card shadow mb-4">
        <!-- Card Header -->
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Sales Order</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
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
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($customer as $row => $c) {
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
                                            <td>
                                                <a href="<?= base_url('edit-so/' . $c['id_customer']); ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm mb-2">
                                                    Progress</a>
                                                <a href="<?= base_url('detail-cust/' . $c['id_customer']); ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm mb-2">
                                                    Detail</a>
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

<!-- Progress Modal-->
<div class="modal fade" id="modalProgress" href="<?= base_url('detail-cust/' . $c['id_customer']); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header btn btn-danger">
                <h5 class="modal-title" id="exampleModalLabel">Progress Status</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('progress-so') ?>" method="post">
                    <input type="hidden" name="id_customer" id="id_customer">
                    <div class="mb-3 row">
                        <label class="sm-2 col-form-label">Last Status </label>
                        <div class="col-sm">
                            <input type="text" class="form-control" id="status" disabled value="<?php echo $c['status']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Progress </label>
                        <div class="col-sm-10">
                            <select class="form-select" name="status">
                                <option selected>Open this select status</option>
                                <option value="IN PROGRESS">IN PROGRESS</option>
                                <option value="NO ODP">NO ODP</option>
                                <option value="COMPLETED">COMPLETED</option>
                                <option value="CANCEL">CANCEL</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm mb-2" type="button" data-dismiss="modal">Cancel</button>
                <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2">Update</button>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>