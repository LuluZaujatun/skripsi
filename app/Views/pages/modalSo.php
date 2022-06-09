<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Page Heading -->
<div class="container">
    <h1 class="h4 mb-2 text-gray-800">Status Progress : <?php echo $custpro[0]['nama_cust']; ?></h1>

    <form action="<?= site_url('/progress-so') ?>" method="post">
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">No Order</span>
                <input type="hidden" name="id_customer" id="id_customer" value="<?php echo $custpro[0]['id_customer']; ?>">
                <input type="hidden" name="date_input" class="form-control" id="date_input" value="<?php echo $custpro[0]['date_input']; ?>">
                <input type="number" name="no_order" class="form-control" id="no_order" value="<?php echo $custpro[0]['no_order']; ?>">
            </div>
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Customer</span>
                <input type="text" name="nama_cust" class="form-control form-control-user" id="nama_cust" value="<?php echo $custpro[0]['nama_cust']; ?>">
                <input type="hidden" name="sto" class="form-control form-control-user" id="sto" value="<?php echo $custpro[0]['sto']; ?>">
            </div>
            <div class="col-xl-3 col-sm-6 ">
                <input type="hidden" name="mitra" class="form-control form-control-user" id="mitra" value="<?php echo $custpro[0]['mitra']; ?>">
                <input type="hidden" name="pic" class="form-control form-control-user" id="pic" value="<?php echo $custpro[0]['pic']; ?>">
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Last Status</span>
                <select type="text" name="status" disabled class="form-control" id="status" value="<?php echo $custpro[0]['status']; ?>">
                    <option value="<?php echo $custpro[0]['status']; ?>"><?php echo $custpro[0]['status']; ?> </option>
                </select>
            </div>
            <div class="col-xl-3 col-sm-6">
                <span class="text-xs">Progress</span>
                <select type="text" name="status" class="form-control" id="status" value="<?php echo $custpro[0]['status']; ?>">
                    <option value="<?php echo $custpro[0]['status']; ?>"><?php echo $custpro[0]['status']; ?> </option>
                    <option value="NO ODP">NO ODP</option>
                    <option value="COMPLETED">COMPLETED</option>
                    <option value="CANCEL">CANCEL</option>
                </select>
                <input type="hidden" name="paket" class="form-control form-control-user" id="paket" value="<?php echo $custpro[0]['paket']; ?>">
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6">
                <input type="hidden" name="speed" class="form-control" id="speed" value="<?php echo $custpro[0]['speed']; ?>">
                <input type="hidden" name="abonemen" class="form-control form-control-user" id="abonemen" value="<?php echo $custpro[0]['abonemen']; ?>">
            </div>
        </div>
        <a class="d-none d-sm-inline-block btn btn-sm shadow-sm mb-2" href="<?= site_url('pages/sales_order'); ?>"> Cancel</a>
        <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2">Update</button>
</div>
<?= $this->endSection(); ?>