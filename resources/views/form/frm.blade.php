<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buat Account Baru</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center" style="min-height: 100vh;">
  <!-- Form Container -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card border-0 shadow-lg rounded-4">
          <div class="card-header bg-dark text-white text-center rounded-top-4">
            <h2 class="fw-bold">Create Your Account</h2>
          </div>
          <div class="card-body p-4">
            <form action="welcome.html" method="post" class="row g-3">
              <!-- Name Field -->
              <div class="col-12">
                <label for="name" class="form-label">Name</label>
                <div class="input-group">
                  <span class="input-group-text bg-dark text-white"><i class="bi bi-person-fill"></i></span>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                </div>
              </div>

              <!-- Gender Field -->
              <div class="col-md-6">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-select" id="gender" name="gender" required>
                  <option value="" disabled selected>Choose...</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>

              <!-- Nationality Field -->
              <div class="col-md-6">
                <label for="nationality" class="form-label">Nationality</label>
                <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Your Nationality" required>
              </div>

              <!-- Language Field -->
              <div class="col-12">
                <label for="language" class="form-label">Language</label>
                <select class="form-select" id="language" name="language" required>
                  <option value="" disabled selected>Choose...</option>
                  <option value="indonesia">Indonesia</option>
                  <option value="inggris">English</option>
                  <option value="other">Other</option>
                </select>
              </div>

              <!-- Bio Field -->
              <div class="col-12">
                <label for="bio" class="form-label">Bio</label>
                <textarea id="bio" name="bio" class="form-control" rows="4" placeholder="Tell us something about yourself..."></textarea>
              </div>

              <!-- Submit Button -->
              <div class="col-12">
                <a href="{{ route('form.akhir') }}"method="get">
                <button type="submit" class="btn btn-dark w-100 py-2">
                  <i class="bi bi-arrow-right-circle-fill"></i> Sign Up
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>