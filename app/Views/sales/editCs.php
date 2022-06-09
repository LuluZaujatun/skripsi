<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Page Heading -->
<div class="container">
    <h1 class="h4 mb-2 text-gray-800">Edit Customer</h1>

    <form action="<?= site_url('/update-cs') ?>" method="post">
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Date Input</span>
                <input type="hidden" name="id_customer" id="id_customer" value="<?php echo $custobj[0]['id_customer']; ?>">
                <input type="date" name="date_input" class="form-control" id="date_input" value="<?php echo $custobj[0]['date_input']; ?>">
            </div>
            <div class="col-xl-3 col-sm-6">
                <span class="text-xs">No Order</span>
                <input type="number" name="no_order" class="form-control" id="no_order" value="<?php echo $custobj[0]['no_order']; ?>">
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Nama Customer</span>
                <input type="text" name="nama_cust" class="form-control form-control-user" id="nama_cust" value="<?php echo $custobj[0]['nama_cust']; ?>">
            </div>
            <div class="col-xl-3 col-sm-6">
                <span class="text-xs">STO</span>
                <select type="text" name="sto" class="form-control form-control-user" id="sto">
                    <option value="<?php echo $custobj[0]['sto']; ?>"><?php echo $custobj[0]['sto']; ?></option>
                    <option value="BEK">BEK</option>
                    <option value="PKY">PKY</option>
                </select>
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Mitra</span>
                <select type="text" name="mitra" class="form-control form-control-user" id="mitra" value="<?php echo $custobj[0]['mitra']; ?>">
                    <option value="<?php echo $custobj[0]['mitra']; ?>"><?php echo $custobj[0]['mitra']; ?></option>
                </select>
            </div>
            <div class="col-xl-3 col-sm-6">
                <span class="text-xs">PIC</span>
                <select type="text" name="pic" class="form-control form-control-user" id="pic">
                    <option value="<?php echo $custobj[0]['pic']; ?>"><?php echo $custobj[0]['pic']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">status</span>
                <select type="text" name="status" class="form-control" id="status" value="<?php echo $custobj[0]['status']; ?>">
                    <option value="<?php echo $custobj[0]['status']; ?>"><?php echo $custobj[0]['status']; ?> </option>
                </select>
            </div>
            <div class="col-xl-3 col-sm-6">
                <span class="text-xs">Paket</span>
                <select type="text" name="paket" class="form-control form-control-user" id="paket">
                    <option value="<?php echo $custobj[0]['paket']; ?>"><?php echo $custobj[0]['paket']; ?></option>
                    <option value="2P PHONE">2P PHONE</option>
                    <option value="4P PHONE">4P PHONE</option>
                </select>
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Speed</span>
                <input type="number" name="speed" class="form-control" id="speed" value="<?php echo $custobj[0]['speed']; ?>">
            </div>
            <div class="col-xl-3 col-sm-6">
                <span class="text-xs">Abonemen</span>
                <input type="number" name="abonemen" class="form-control form-control-user" id="abonemen" value="<?php echo $custobj[0]['abonemen']; ?>">
            </div>
        </div>
        <a class="d-none d-sm-inline-block btn btn-sm shadow-sm mb-2" href="<?= site_url('sales/custSales'); ?>"> Cancel</a>
        <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2">Update</button>
</div>

<?= $this->endSection(); ?>