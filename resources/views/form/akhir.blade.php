<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center" style="min-height: 100vh;">

  <!-- Main Container -->
  <div class="container text-center">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card shadow-lg border-0">
          <!-- Header -->
          <div class="card-header bg-dark text-white py-4">
            <h1 class="fw-bold">SELAMAT DATANG!</h1>
          </div>
          <!-- Content -->
          <div class="card-body bg-light">
            <p class="fs-5 text-secondary">
              Terima kasih telah bergabung di Website Kami. Media Belajar kita bersama!
            </p>
          </div>
          <!-- Footer -->
          <div class="card-footer bg-dark text-white py-3">
            <a href="{{ route('form.index') }}" class="btn btn-light">Kembali ke Halaman Utama</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>