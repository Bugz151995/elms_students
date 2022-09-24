<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="topbar">
  <div class="container-fluid px-4">
    <a class="navbar-brand fs-2 d-flex align-items-center" href="#">
      <img src="<?= base_url() ?>/assets/gnhs_logo.png" alt="" width="50">
      <div id="brandName" class="d-inline ms-3 small fw-bold">
        <span class="d-block">GNHS</span>
        <span class="d-block small">LMS</span>
      </div>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url() ?>/home#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#books">Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#features">Features</a>
        </li>
        <li class="nav-item">
          <div class="dropdown">
            <a class="nav-link" href="" role="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Notifications</a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Action</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link" href="#">Profile</a>
        </li>
        <li class="nav-item d-flex align-items-center">
          <a class="btn btn-sm btn-outline-dark" href="<?= base_url() ?>/signout"><i class="fas fa-right-from-bracket fa-fw"></i> Sign Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>