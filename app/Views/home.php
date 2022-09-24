<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<header>
  <?= $this->include('components/navbar') ?>
</header>

<main>
  <section class="px-4 py-5 text-lg-start text-center d-flex justify-content-center align-items-center bg-light" id="home">
    <div class="container">
      <img class="d-block mx-auto mx-lg-0 me-lg-auto mb-4" src="<?= base_url() ?>/assets/gnhs_logo.png" alt="" width="200">
      <h1 class="display-5 fw-bold">Fast and Reliable <br> Library Management System</h1>
      <div class="col-lg-6 mx-auto mx-lg-0 me-lg-auto">
        <p class="lead mb-4"></p>
        <div class="d-grid gap-2 d-sm-flex justify-content-center justify-content-lg-start">
          <a href="#contact" class="btn btn-primary btn-lg px-4 gap-3">Contact Us</a>
          <a href="#about" class="btn btn-outline-secondary btn-lg px-4">Learn More..</a>
        </div>
      </div>
    </div>
  </section>

  <section class="px-4 py-5 text-center d-flex justify-content-center align-items-center" id="books">
    <div class="container">
      <img class="d-block mx-auto mb-4" src="<?= base_url() ?>/assets/browse_book.png" alt="" width="300">
      <h2 class="display-6 fw-bold">Browse Books</h2>
      <p class="lead mb-5">You can browse and search for your books in the Book catalog.</p>
      <div class="col-lg-6 mx-auto">
        <form action="" method="post">
          <div class="d-flex">
            <input class="form-control form-control-lg" type="search" placeholder="Please enter the book's name..." aria-label="Search">
            <button class="btn btn-lg btn-outline-success" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <section class="px-4 py-5 text-center d-flex justify-content-center align-items-center bg-light" id="features">
    <div class="container">
      <h2 class="display-6 fw-bold text-center mb-5 pb-5">Our Features and Services</h2>
      <div class="row g-3 row-cols-1 row-cols-md-3">
        <div class="col d-flex justify-content-center">
          <div class="card shadow" style="width: 18rem;">
            <img src="<?= base_url() ?>/assets/qr_scanning.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">QR Code Scanning</h5>
              <p class="card-text">Fast and reliable issuing and returning of books through QR code technology.</p>
            </div>
          </div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="card shadow" style="width: 18rem;">
            <img src="<?= base_url() ?>/assets/online_access.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Online Access</h5>
              <p class="card-text">Ease of access with our online portal, enables students/faculty to scan and read books online.</p>
            </div>
          </div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="card shadow" style="width: 18rem;">
            <img src="<?= base_url() ?>/assets/fee_management.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Fee Management</h5>
              <p class="card-text">View, and Settle fees incurred from returning books that is past due date.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?= $this->include('components/footer') ?>

<?= $this->endSection() ?>