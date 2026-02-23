<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Animated Card</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
  <style>
    /* Card Animation */
    .animated-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-radius: 12px;
      overflow: hidden;
    }
    .animated-card:hover {
      transform: translateY(-8px) scale(1.03);
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    }
    .card-img-top {
      transition: transform 0.4s ease;
    }
    .animated-card:hover .card-img-top {
      transform: scale(1.1);
    }
  </style>
</head>
<body class="bg-light">

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card animated-card shadow-sm">
        <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Card Image">
        <div class="card-body text-center">
          <h5 class="card-title">Premium Widget</h5>
          <p class="card-text text-muted">A modern Bootstrap card with smooth hover animation and image zoom effect.</p>
          <a href="#" class="btn btn-primary">
            <i class="fas fa-arrow-right"></i> Learn More
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
