<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Page Heading -->
<div class="container">
    <h1 class="h4 mb-2 text-gray-800">Detail Akun User <?php echo $user[0]['name']; ?></h1>
    <br>
    <form action="<?= site_url('/updateUser') ?>" method="post">
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">User ID</span>
                <input type="hidden" name="id" id="id" value="<?php echo $user[0]['id']; ?>">
                <input type="hidden" name="userID" id="userID" value="<?php echo $user[0]['userID']; ?>">
                <h5> <?php echo $user[0]['userID']; ?></h5>
            </div>
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Name</span>
                <input type="hidden" name="name" id="name" value="<?php echo $user[0]['name']; ?>">
                <h5> <?php echo $user[0]['name']; ?></h5>
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Posisi</span>
                <input type="hidden" name="posisi" id="posisi" value="<?php echo $user[0]['posisi']; ?>">
                <h5> <?php echo $user[0]['posisi']; ?></h5>
            </div>
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Level</span>
                <input type="hidden" name="level" id="level" value="<?php echo $user[0]['level']; ?>">
                <h5> <?php echo $user[0]['level']; ?></h5>
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Change Password</span>
                <input type="text" name="password" class="form-control form-control-user <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password">
                <div class="invalid-feedback">
                    <?= $validation->getError('password'); ?>
                </div>
            </div>
        </div>
        <a class="d-none d-sm-inline-block btn btn-sm shadow-sm mb-2" href="<?= site_url('pages/user'); ?>"> Cancel</a>
        <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2">Change</button>
</div>
<?= $this->endSection(); ?>