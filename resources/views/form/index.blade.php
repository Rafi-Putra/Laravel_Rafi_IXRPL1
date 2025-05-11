<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Header Section -->
    <header class="bg-primary text-white py-3">
        <div class="container text-center">
            <h1>Media Online</h1>
            <p class="mb-0">Belajar dan berbagi untuk hidup yang lebih baik</p>
        </div>
    </header>

    <!-- Benefits Section -->
    <section class="container mt-4">
        <h2 class="text-center text-primary">Keuntungan Bergabung</h2>
        <ul class="list-group mt-3">
            <li class="list-group-item">Dapat motivasi dari sesama developer.</li>
            <li class="list-group-item">Bisa berbagi dan mendapatkan pengetahuan baru.</li>
            <li class="list-group-item">Bergabung dengan komunitas developer terbaik.</li>
        </ul>
    </section>

    <!-- How to Join Section -->
    <section class="container mt-5">
        <h2 class="text-center text-danger">Cara Bergabung</h2>
        <ol class="list-group mt-3 list-group-numbered">
            <li class="list-group-item">Kunjungi website ini.</li>
            <li class="list-group-item">Isi formulir pendaftaran.</li>
            <li class="list-group-item">Mulai perjalanan Anda!</li>
        </ol>
        <div class="text-center mt-4">
            <a href="{{ route ('form.frm') }}" class="btn btn-primary">Sign Up Sekarang</a>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-light text-center py-3 border-top mt-5">
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>