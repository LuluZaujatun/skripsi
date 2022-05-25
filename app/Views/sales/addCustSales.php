<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<!-- Page Heading -->
<div class="container">
    <h1 class="h4 mb-2 text-gray-800">Add New Customer</h1>

    <form action="<?php echo base_url('/submit-custSales'); ?>" method="post">
        <!-- <?= csrf_field(); ?> -->
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Date Input</span>
                <input type="date" name="date_input" class="form-control <?= ($validation->hasError('date_input')) ? 'is-invalid' : ''; ?>" id="date_input" value=" <?= old('date_input'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('date_input'); ?>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <span class="text-xs">No Order</span>
                <input type="number" name="no_order" class="form-control <?= ($validation->hasError('no_order')) ? 'is-invalid' : ''; ?>" id="no_order" placeholder="52**" value="<?= old('no_order'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('no_order'); ?>
                </div>
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Customer Name</span>
                <input type="text" name="nama_cust" class="form-control <?= ($validation->hasError('nama_cust')) ? 'is-invalid' : ''; ?>" id="nama_cust" value="<?= old('nama_cust'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('nama_cust'); ?>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <span class="text-xs">STO</span>
                <select type="text" name="sto" class="form-control <?= ($validation->hasError('sto')) ? 'is-invalid' : ''; ?>" id="sto" placeholder="STO" value="<?= old('sto'); ?>">
                    <option value="Select STO">Select STO</option>
                    <option value="BEK">BEK</option>
                    <option value="PKY">PKY</option>
                </select>
                <div class="invalid-feedback">
                    <?= $validation->getError('sto'); ?>
                </div>
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Mitra</span>
                <select type="text" name="mitra" class="form-control <?= ($validation->hasError('mitra')) ? 'is-invalid' : ''; ?>" id="mitra" placeholder="Mitra" value="<?= old('mitra'); ?>">
                    <option value="Select Mitra">Select Mitra</option>
                    <option value="MCP">MCP</option>
                    <option value="MNA">MNA</option>
                    <option value="SDS">SDS</option>
                </select>
                <div class="invalid-feedback">
                    <?= $validation->getError('mitra'); ?>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <span class="text-xs">PIC</span>
                <select type="text" name="pic" class="form-control <?= ($validation->hasError('pic')) ? 'is-invalid' : ''; ?>" id="pic" value="<?= old('pic'); ?>">
                    <option value="Select PIC">Select PIC</option>
                    <option value="Annisa">Annisa</option>
                    <option value="Dinda Marsha">Dinda Marsha</option>
                    <option value="Doni Pratama">Doni Pratama</option>
                    <option value="Diana">Diana</option>
                    <option value="Elfan Ery">Elfan Ery</option>
                    <option value="Indah Ayu">Indah Ayu</option>
                    <option value="Putra Bagus">Putra Bagus</option>
                    <option value="Toni Putra">Toni Putra</option>
                </select>
                <div class="invalid-feedback">
                    <?= $validation->getError('pic'); ?>
                </div>
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Status</span>
                <select type="text" name="status" class="form-control <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" id="status" placeholder="Status" value="<?= old('status'); ?>">
                    <option value="IN PROGRESS">IN PROGRESS</option>
                </select>
                <div class="invalid-feedback">
                    <?= $validation->getError('status'); ?>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <span class="text-xs">Paket</span>
                <select type="text" name="paket" class="form-control <?= ($validation->hasError('paket')) ? 'is-invalid' : ''; ?>" id="paket" value="<?= old('paket'); ?>">
                    <option value="Select Paket">Select Paket</option>
                    <option value="2P PHONE">2P PHONE</option>
                    <option value="4P PHONE">4P PHONE</option>
                </select>
                <div class="invalid-feedback">
                    <?= $validation->getError('paket'); ?>
                </div>
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Speed</span>
                <input type="number" name="speed" class="form-control <?= ($validation->hasError('speed')) ? 'is-invalid' : ''; ?>" id="speed" placeholder="20" value="<?= old('speed'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('speed'); ?>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <span class="text-xs">Abonemen</span>
                <input type="number" name="abonemen" class="form-control <?= ($validation->hasError('abonemen')) ? 'is-invalid' : ''; ?>" id="abonemen" placeholder="315000" value="<?= old('abonemen'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('abonemen'); ?>
                </div>
            </div>
        </div>
        <a class="d-none d-sm-inline-block btn btn-sm shadow-sm mb-2" href="<?= base_url('sales/custSales'); ?>"> Cancel</a>
        <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2"> Add New</button>
</div>

<?= $this->endSection(); ?>