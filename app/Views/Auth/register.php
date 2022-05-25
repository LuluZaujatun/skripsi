<?= $this->extend('auth/layout') ?>
<?= $this->section('main') ?>

<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">

                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb"><?= lang('Auth.register') ?></h1>
                                </div>
                                <?php if (session()->getFlashdata('pesan')) : ?>
                                    <div class="alert alert-secondary alert-dismissible show fade">
                                        <div class="alert-body">
                                            <button class="close" data-dismiss="alert">x</button>
                                            <b>Success!</b>
                                            <?= session()->getFlashdata('pesan') ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <form action="regisSave" method="post">
                                    <?= csrf_field() ?>
                                    <div class="form-group">
                                        <label for="userID">User ID</label>
                                        <input type="text" class="form-control <?= ($validation->hasError('userID')) ? 'is-invalid' : ''; ?>" name="userID" placeholder="User ID" value="<?= old('userID') ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('userID'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Fullname</label>
                                        <input type="text" name="name" class="form-control  <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" placeholder="Fullname">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('name'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mitra">Mitra</label>
                                        <input type="text" name="mitra" class="form-control  <?= ($validation->hasError('mitra')) ? 'is-invalid' : ''; ?>" placeholder="Mitra">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('mitra'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="posisi">Posisi</label>
                                        <input type="text" name="posisi" class="form-control  <?= ($validation->hasError('posisi')) ? 'is-invalid' : ''; ?>" placeholder="Posisi">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('posisi'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password"><?= lang('Auth.password') ?></label>
                                        <input type="password" name="password" class="form-control  <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" placeholder="<?= lang('Auth.password') ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('password'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="level">Level</label>
                                        <select type="text" name="level" class="form-control  <?= ($validation->hasError('level')) ? 'is-invalid' : ''; ?>" placeholder="Level">
                                            <option value="2">Sales</option>
                                            <option value="1">BGES</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('level'); ?>
                                        </div>
                                    </div>
                                    <br>

                                    <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.register') ?></button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <p><a class="small" href="<?= base_url('auth/login'); ?>"><?= lang('Auth.alreadyRegistered') ?> <?= lang('Auth.signIn') ?></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <?= $this->endSection() ?>