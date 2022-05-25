<?= $this->extend('auth/layout') ?>
<?= $this->section('main') ?>

<div class="container">

	<!-- Outer Row -->
	<div class="row justify-content-center p-3">
		<div class="col-md-6 center">
			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg">
							<div class="p-3">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Selamat Datang di Web Monitoring Sales Force BGES</h1>
								</div>

								<?php if (session()->getFlashdata('error')) : ?>
									<div class="alert alert-danger alert-dismissible show fade">
										<div class="alert-body">
											<button class="close" data-dismiss="alert">x</button>
											<b>Error !</b>
											<?= session()->getFlashdata('error') ?>
										</div>
									</div>
								<?php endif; ?>
								<?php var_dump(session('level')); ?>
								<?= session()->get('pesan') ?>
								<!-- email/username -->
								<form action="<?= base_url('proses') ?>" method="post">
									<?= csrf_field() ?>

									<div class="form-group">
										<label for="login">User ID</label>
										<input type="text" class="form-control <?= ($validation->hasError('userID')) ? 'is-invalid' : ''; ?>" name="userID" placeholder="User ID">
										<div class="invalid-feedback">
											<?= $validation->getError('userID'); ?>
										</div>
									</div>
									<div class="form-group">
										<label for="password"><?= lang('Auth.password') ?></label>
										<input type="password" name="password" class="form-control  <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" placeholder="<?= lang('Auth.password') ?>">
										<div class="invalid-feedback">
											<?= $validation->getError('password'); ?>
										</div>
									</div>
									<div class="form-check">
										<label class="form-check-label">
											<input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
											<?= lang('Auth.rememberMe') ?>
										</label>
									</div>
									<br>
									<button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.loginAction') ?> </button>
								</form>
								<hr>
								<p><a class="small" href="<?= base_url('auth/forgot'); ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
								<p><a class="small" href="<?= base_url('auth/register'); ?>"><?= lang('Auth.needAnAccount') ?></a></p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection() ?>