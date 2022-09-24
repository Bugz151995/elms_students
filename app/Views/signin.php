<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<main id="signinMain" class="d-flex justify-content-center">
	<?= form_open('signin', ['id' => 'signinForm', 'class' => 'row']) ?>

	<div class="d-flex flex-column col align-items-center align-items-sm-start pe-5">
		<img src="<?= base_url() ?>/assets/gnhs_logo.png" alt="goa national high school logo" id="signinBrand" class="mb-4">
		<p class="text-sm-start text-center"><span class="fs-2">Hello, Welcome Dear Student!</span></p>
		<p class="text-sm-start text-center">Please enter your login credentials to continue or click the signup link if you want to register.</p>
	</div>

	<div class="col">
		<h1 class="text-center fw-bold text-uppercase">Sign In</h1>
		<hr id="signinDivider">
		<div class="mb-3 mt-4">
			<label for="username" class="form-label">Username</label>
			<input type="text" class="form-control form-control-sm" id="username" name="username" value="<?= set_value('username') ?>" placeholder="Enter your username...">
			<?= isset($validation) ? $validation->showError('username', 'single') : null ?>
		</div>
		<div class="mb-4">
			<label for="password" class="form-label">Password</label>
			<input type="password" class="form-control form-control-sm" id="password" name="password" value="<?= set_value('password') ?>" placeholder="Enter your password...">
			<?= isset($validation) ? $validation->showError('password', 'single') : null ?>
		</div>
		<hr id="signinDivider">
		<input type="submit" id="signinSubmitBtn" value="Sign-In" class="btn btn-danger w-100">

		<p class="text-center mt-4 m-0">Don't have an account? <a href="<?= base_url() ?>/signup" class="link-light">Sign Up</a>.</p>
		<?= form_close() ?>
	</div>
</main>

<style>
  #signinMain {
    background-image: url("<?= base_url() ?>/assets/book_bg.jpg");
    background-size: cover;
  }
</style>

<?= $this->endSection() ?>