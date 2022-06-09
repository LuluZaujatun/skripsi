<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Page Heading -->
<div class="container">
    <h1 class="h4 mb-2 text-gray-800">Update Setting Point</h1>
    <br>
    <form action="<?= site_url('/updatePoint') ?>" method="post">
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Indikator</span>
                <input type="hidden" name="id" id="id" value="<?php echo $setting[0]['id']; ?>">
                <input type="hidden" name="indikator" id="indikator" value="<?php echo $setting[0]['indikator']; ?>">
                <h5> <?php echo $setting[0]['indikator']; ?></h5>
            </div>
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Deskripsi</span>
                <input type="hidden" name="deskripsi" id="deskripsi" value="<?php echo $setting[0]['deskripsi']; ?>">
                <h5> <?php echo $setting[0]['deskripsi']; ?></h5>
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Point</span>
                <input type="hidden" name="point" id="point" value="<?php echo $setting[0]['point']; ?>">
                <h5> <?php echo $setting[0]['point']; ?></h5>
            </div>
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Change Periode</span>
                <input type="text" name="periode" class="form-control form-control-user <?= ($validation->hasError('periode')) ? 'is-invalid' : ''; ?>" id="periode">
                <div class="invalid-feedback">
                    <?= $validation->getError('periode'); ?>
                </div>
            </div>
        </div>
        <a class="d-none d-sm-inline-block btn btn-sm shadow-sm mb-2" href="<?= site_url('pages/setting'); ?>"> Cancel</a>
        <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2">Change</button>
</div>
<?= $this->endSection(); ?>