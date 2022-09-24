<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<main class="success-body" id="successBody">
  <div class="success-card">
    <div class="success-container">
      <div class="success-circle-border"></div>
      <div class="circle">
        <div class="success"></div>
      </div>
    </div>

    <div class="text-center">
      <h1 class="fs-2 text-uppercase">Sign Up Successful!</h1>
      <p class="m-0 small">Thank you for signing up! you can now login to your account and browse for available books in the library of Goa National High School. If you have any questions, please feel free to contact us at goanhs.official@gmail.com or call us at 0927-422-7744.</p>
      <div class="d-flex gap-2 justify-content-center">
        <a href="<?= base_url() ?>" class="btn btn-secondary mt-3">Close</a>
        <a href="<?= base_url() ?>" class="btn btn-success mt-3">Signin Now</a>
      </div>
    </div>
  </div>
</main>

<style>
  #successBody {
    background-image: url("<?= base_url() ?>/assets/book_bg.jpg");
    background-size: cover;
  }
</style>
<?= $this->endSection() ?>