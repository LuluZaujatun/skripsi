<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Page Heading -->
<div class="container">
    <h1 class="h4 mb-2 text-gray-800"><?php echo $custobj[0]['nama_cust']; ?></h1>

    <div class="form-group row mb-3">
        <div class="col-xl-3 col-sm-6 ">
            <span class="text-xs">Date Input</span>
            <input type="hidden" name="id_customer" id="id_customer" value="<?php echo $custobj[0]['id_customer']; ?>">
            <input type="date" name="date_input" class="form-control" id="date_input" disabled value="<?php echo $custobj[0]['date_input']; ?>">
        </div>
        <div class="col-xl-3 col-sm-6">
            <span class="text-xs">No Order</span>
            <input type="number" name="no_order" class="form-control" id="no_order" disabled value="<?php echo $custobj[0]['no_order']; ?>">
        </div>
    </div>
    <div class="form-group row mb-3">
        <div class="col-xl-3 col-sm-6 ">
            <span class="text-xs">Nama Customer</span>
            <input type="text" name="nama_cust" class="form-control form-control-user" id="nama_cust" disabled value="<?php echo $custobj[0]['nama_cust']; ?>">
        </div>
        <div class="col-xl-3 col-sm-6">
            <span class="text-xs">STO</span>
            <input type="text" name="sto" class="form-control form-control-user" id="sto" disabled value="<?php echo $custobj[0]['sto']; ?>">
        </div>
    </div>
    <div class="form-group row mb-3">
        <div class="col-xl-3 col-sm-6 ">
            <span class="text-xs">Mitra</span>
            <input type="text" name="mitra" class="form-control form-control-user" id="mitra" disabled value="<?php echo $custobj[0]['mitra']; ?>">
        </div>
        <div class="col-xl-3 col-sm-6">
            <span class="text-xs">PIC</span>
            <input type="text" name="pic" class="form-control form-control-user" id="pic" disabled value="<?php echo $custobj[0]['pic']; ?>">
        </div>
    </div>
    <div class="form-group row mb-3">
        <div class="col-xl-3 col-sm-6 ">
            <span class="text-xs">status</span>
            <input type="text" name="status" class="form-control" id="status" disabled value="<?php echo $custobj[0]['status']; ?>">
        </div>
        <div class="col-xl-3 col-sm-6">
            <span class="text-xs">Paket</span>
            <input type="text" name="paket" class="form-control form-control-user" id="paket" disabled value="<?php echo $custobj[0]['paket']; ?>">
        </div>
    </div>
    <div class="form-group row mb-3">
        <div class="col-xl-3 col-sm-6 ">
            <span class="text-xs">Speed</span>
            <input type="number" name="speed" class="form-control" id="speed" disabled value="<?php echo $custobj[0]['speed']; ?>">
        </div>
        <div class="col-xl-3 col-sm-6">
            <span class="text-xs">Abonemen</span>
            <input type="number" name="abonemen" class="form-control form-control-user" id="abonemen" disabled value="<?php echo $custobj[0]['abonemen']; ?>">
        </div>
    </div>
    <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2" href="<?= site_url('pages/sales_order'); ?>"> Back</a>
</div>

<?= $this->endSection(); ?>