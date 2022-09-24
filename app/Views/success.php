<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<main class="success-body">
  <div class="success-card">
    <div class="success-container">
      <div class="success-circle-border"></div>
      <div class="circle">
        <div class="success"></div>
      </div>
    </div>

    <div class="text-center">
      <h1 class="fs-1 text-uppercase">Sign Up Successful!</h1>
      <p class="m-0">Thank you for signing up! you can now login to your account and browse for available books in the library of Goa National High School. If you have any questions, please feel free to contact us at gnhslms@gmail.com.</p>
      <div class="d-flex gap-2 justify-content-center">
        <a href="<?= base_url() ?>" class="btn btn-secondary mt-3">Close</a>
        <a href="<?= base_url() ?>" class="btn btn-success mt-3">Signin Now</a>
      </div>
    </div>
  </div>
</main>

<?= $this->endSection() ?>