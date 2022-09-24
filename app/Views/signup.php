<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<main id="signinMain" class="d-flex justify-content-center">
	<?= form_open('signup', ['id' => 'signinForm', 'class' => 'row row-cols-1 row-cols-sm-2']) ?>
	<div class="col-12">
		<h1 class="text-center fw-bold text-uppercase">Sign Up</h1>
		<hr id="signinDivider">
	</div>
	<div class="col">
		<div class="mb-3">
			<label for="fname" class="form-label">First Name</label>
			<input type="text" class="form-control form-control-sm" id="fname" name="fname" value="<?= set_value('fname') ?>" placeholder="Enter your username...">
			<?= isset($validation) ? $validation->showError('fname', 'single') : null ?>
		</div>
		<div class="mb-3">
			<label for="mname" class="form-label">Middle Name</label>
			<input type="text" class="form-control form-control-sm" id="mname" name="mname" value="<?= set_value('mname') ?>" placeholder="Enter your password...">
			<?= isset($validation) ? $validation->showError('mname', 'single') : null ?>
		</div>
		<div class="mb-3">
			<label for="lname" class="form-label">Last Name</label>
			<input type="text" class="form-control form-control-sm" id="lname" name="lname" value="<?= set_value('lname') ?>" placeholder="Enter your password...">
			<?= isset($validation) ? $validation->showError('lname', 'single') : null ?>
		</div>
		<div class="mb-3">
			<label for="class" class="form-label">Class</label>
			<select name="class" id="class" class="form-select form-select-sm">
				<option value="">Select Class..</option>
				<?php foreach ($class as $c) : ?>
					<option value="<?= $c['class_id'] ?>"><?= $c['section_name'] ?></option>
				<?php endforeach ?>
			</select>
			<?= isset($validation) ? $validation->showError('class', 'single') : null ?>
		</div>
	</div>
	<div class="col">
		<div class="mb-3">
			<label for="username" class="form-label">Username</label>
			<input type="text" class="form-control form-control-sm" id="username" name="username" value="<?= set_value('username') ?>" placeholder="Enter your desired username...">
			<?= isset($validation) ? $validation->showError('username', 'single') : null ?>
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Password</label>
			<input type="password" class="form-control form-control-sm" id="password" name="password" value="<?= set_value('password') ?>" placeholder="Enter your desired password...">
			<?= isset($validation) ? $validation->showError('password', 'single') : null ?>
		</div>
		<div class="mb-3">
			<label for="passwordConf" class="form-label">Confirm Password</label>
			<input type="password" class="form-control form-control-sm" id="passwordConf" name="password_conf" value="<?= set_value('password') ?>" placeholder="Please confirm your password...">
			<?= isset($validation) ? $validation->showError('password_conf', 'single') : null ?>
		</div>
	</div>
	<div class="col-12">
		<hr id="signinDivider">
		<input type="submit" id="signinSubmitBtn" value="Sign-Up" class="btn btn-danger w-100">

		<p class="text-center mt-4 m-0">Already have an account? <a href="<?= base_url() ?>" class="link-light">Sign In</a>.</p>
	</div>
	<?= form_close() ?>
</main>

<style>
  #signinMain {
    background-image: url("<?= base_url() ?>/assets/book_bg.jpg");
    background-size: cover;
  }
</style>
<?= $this->endSection() ?>