<?php $pageTitle = 'About Us | NCC-OSAEC'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $pageTitle ?></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<section class="py-5">
  <div class="container">
    <h2 class="text-primary fw-bold mb-4">About the Agency</h2>

    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <p>
          The NCC-OSAEC is the primary coordinating body of the Philippine Government
          in addressing online sexual abuse and exploitation of children.
        </p>
      </div>
    </div>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <h5 class="text-primary">Vision</h5>
            <p>A safe and empowered digital environment for every child.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <h5 class="text-primary">Mission</h5>
            <p>To harmonize national efforts against OSAEC through policy and action.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <h5 class="text-primary">Legal Basis</h5>
            <p>Established under Republic Act XXXX and executive issuances.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
