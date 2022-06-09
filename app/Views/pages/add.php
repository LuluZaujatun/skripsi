<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<!-- Page Heading -->
<div class="container">
    <h1 class="h4 mb-2 text-gray-800">Add New Sales</h1>

    <form action="<?php echo base_url('/submit-form'); ?>" method="post">
        <!-- <?= csrf_field(); ?> -->
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">ID Sales</span>
                <input type="text" name="userID" class="form-control <?= ($validation->hasError('userID')) ? 'is-invalid' : ''; ?>" id="userID" placeholder="DS123**" value="<?= old('userID'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('userID'); ?>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <span class="text-xs">Fullname</span>
                <input type="text" name="nama_sales" class="form-control <?= ($validation->hasError('nama_sales')) ? 'is-invalid' : ''; ?>" id="nama_sales" value="<?= old('nama_sales'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('nama_sales'); ?>
                </div>
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Witel</span>
                <select type="text" name="witel" class="form-control <?= ($validation->hasError('witel')) ? 'is-invalid' : ''; ?>" id="witel" placeholder="Witel" value="<?= old('witel'); ?>">
                    <option value="BKS">BKS</option>
                </select>
                <div class="invalid-feedback">
                    <?= $validation->getError('witel'); ?>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <span class="text-xs">Nomor Telepon</span>
                <input type="int" name="no_telp" class="form-control <?= ($validation->hasError('no_telp')) ? 'is-invalid' : ''; ?>" id="no_telp" placeholder="0822**" value="<?= old('no_telp'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('no_telp'); ?>
                </div>
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Mitra</span>
                <select type="text" name="mitra" class="form-control <?= ($validation->hasError('mitra')) ? 'is-invalid' : ''; ?>" id="mitra" placeholder="Mitra" value="<?= old('mitra'); ?>">
                    <option value="MCP">MCP</option>
                    <option value="MNA">MNA</option>
                    <option value="SDS">SDS</option>
                </select>
                <div class="invalid-feedback">
                    <?= $validation->getError('mitra'); ?>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <span class="text-xs">Posisi</span>
                <select type="text" name="posisi" class="form-control <?= ($validation->hasError('posisi')) ? 'is-invalid' : ''; ?>" id="posisi" placeholder="Sales Force">
                    <option value="Sales Force">Sales Force</option>
                </select>
                <div class="invalid-feedback">
                    <?= $validation->getError('posisi'); ?>
                </div>
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Tanggal Aktif</span>
                <input type="date" name="tgl_aktif" class="form-control <?= ($validation->hasError('tgl_aktif')) ? 'is-invalid' : ''; ?>" id="tgl_aktif" value="<?= old('tgl_aktif'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('tgl_aktif'); ?>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <span class="text-xs">SPV</span>
                <select type="text" name="spv" class="form-control <?= ($validation->hasError('spv')) ? 'is-invalid' : ''; ?>" id="spv" placeholder="SPV" value="<?= old('spv'); ?>">
                    <option value="Dewi Puspa">Dewi Puspa</option>
                    <option value="Budianto">Budianto</option>
                    <option value="Putra Bagus">Putra Bagus</option>
                </select>
                <div class="invalid-feedback">
                    <?= $validation->getError('spv'); ?>
                </div>
            </div>
        </div>
        <a class="d-none d-sm-inline-block btn btn-sm shadow-sm mb-2" href="<?= base_url('pages/data_sales'); ?>"> Cancel</a>
        <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2"> Add New</button>
</div>

<?= $this->endSection(); ?>