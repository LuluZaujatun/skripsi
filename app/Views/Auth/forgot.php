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
                                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                    <p class="mb-4">We get it, stuff happens. Just enter your ID User below
                                        and we'll send your password!</p>
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
                                <form action="/send" method="post">
                                    <?= csrf_field() ?>

                                    <div class="form-group">
                                        <label for="userID">User ID</label>
                                        <input type="text" class="form-control <?= ($validation->hasError('userID')) ? 'is-invalid' : ''; ?>" name="userID" placeholder="User ID">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('userID'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userID">Fullname</label>
                                        <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" name="name" placeholder="Fullname">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('name'); ?>
                                        </div>
                                    </div>
                                    <br>

                                    <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.sendInstructions') ?></button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <p><a class="small" href="<?= base_url('auth/login'); ?>"><?= lang('Already have Account?') ?> <?= lang('Auth.signIn') ?></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <?= $this->endSection() ?>