<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<!-- Page Heading -->
<div class="container">
    <img class="img-profile rounded-circle" alt="Image" height="100" width="100" src="<?php echo base_url('sb admin') ?>/img/default.svg">
    <a class="h4 mb-2 text-gray-800">Profile <?php echo $profilesls[0]['name']; ?></a>
    <div class="form-group row mb-3">
        <div class="col-xl-3 col-sm-6 ">
            <span class="text-xs">ID Sales</span>
            <input type="hidden" name="id_sales" id="id_sales" value="<?php echo $profilesls[0]['id']; ?>">
            <input type="text" name="userID" class="form-control" disabled value="<?php echo $profilesls[0]['userID']; ?>">
        </div>
        <div class="col-xl-3 col-sm-6">
            <span class="text-xs">Fullname</span>
            <input type="text" name="nama_sales" class="form-control" id="nama_sales" disabled value="<?php echo $profilesls[0]['name']; ?>">
        </div>
    </div>
    <div class="form-group row mb-3">
        <div class="col-xl-3 col-sm-6 ">
            <span class="text-xs">Mitra</span>
            <input type="text" name="mitra" class="form-control form-control-user" id="mitra" disabled value="<?php echo $profilesls[0]['mitra']; ?>">
        </div>
        <div class="col-xl-3 col-sm-6">
            <span class="text-xs">Posisi</span>
            <input type="text" name="posisi" class="form-control form-control-user" id="posisi" disabled value="<?php echo $profilesls[0]['posisi']; ?>">
        </div>
    </div>
    <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2" href="<?= site_url('pages'); ?>"> Back</a>
</div>
<?= $this->endSection(); ?>