<?php
$pageTitle = 'Home | NCC-OSAEC';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $pageTitle ?></title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- ===================== HEADER / NAVBAR ===================== -->
<nav class="navbar navbar-expand-lg navbar-dark ncc-navbar">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">NCC-OSAEC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="resources.php">Resources</a></li>
        <li class="nav-item"><a class="nav-link" href="news.php">News</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- ===================== HERO SECTION ===================== -->
<section class="hero-section text-white text-center">
  <div class="container">
    <h1 class="fw-bold">Protecting Children. Strengthening Communities.</h1>
    <p class="lead mt-3">
      National Coordinating Council Against Online Sexual Abuse and Exploitation of Children
    </p>
  </div>
</section>

<!-- ===================== MAIN CONTENT ===================== -->
<section class="py-5">
  <div class="container">
    <div class="row g-4">

      <!-- Latest News Card -->
      <div class="col-md-8">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <h5 class="card-title text-primary">Latest News</h5>
            <p class="card-text">This is placeholder content for the latest updates and news about NCC-OSAEC programs and activities.</p>
          </div>
        </div>
      </div>

      <!-- Government Hours Card -->
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <h5 class="card-title text-primary">Government Hours</h5>
            <p>Monday – Friday<br>8:00 AM – 5:00 PM</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===================== FOOTER ===================== -->
<footer class="ncc-footer mt-5">
  <div class="container py-5">
    <div class="row">

      <!-- Agency Info -->
      <div class="col-md-4">
        <h6 class="fw-bold text-primary">NCC-OSAEC</h6>
        <p class="small">
          Government council committed to protecting children against online sexual abuse.
        </p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-4">
        <h6 class="fw-bold text-primary">Quick Links</h6>
        <ul class="list-unstyled small">
          <li><a href="about.php">About Us</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="resources.php">Resources</a></li>
          <li><a href="news.php">News</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="col-md-4">
        <h6 class="fw-bold text-primary">Contact</h6>
        <p class="small mb-1">info@ncc-osaec.gov.ph</p>
        <p class="small mb-1">(02) 1234-5678</p>
        <p class="small mb-1">Office Hours: Mon–Fri, 8:00 AM – 5:00 PM</p>
      </div>

    </div>

    <hr>

    <p class="text-center small mb-0">
      © <?= date('Y'); ?> NCC-OSAEC | <a href="#">Data Privacy</a> | <a href="#">Citizen’s Charter</a>
    </p>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
