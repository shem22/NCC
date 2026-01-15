<?php $pageTitle = 'News | NCC-OSAEC'; ?>
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
    <h2 class="text-primary fw-bold mb-4">Latest News</h2>

    <div class="card shadow-sm mb-3">
      <div class="card-body">
        <h5 class="card-title">Sample News Title</h5>
        <p class="card-text">This is placeholder content for news articles.</p>
      </div>
    </div>

    <div class="card shadow-sm">
      <div class="card-body">
        <h5 class="card-title">Another Announcement</h5>
        <p class="card-text">More updates and announcements will appear here.</p>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
