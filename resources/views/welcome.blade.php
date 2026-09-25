<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Safari Bank V2</title>
    <!-- Memanggil Bootstrap dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="text-center">
        <h1 class="text-success fw-bold">Selamat Datang di Safari Bank V2 🚀</h1>
        <p class="text-muted">Sistem perbankan ini dibangun dengan arsitektur Enterprise MVC Laravel.</p>

        <div class="mt-4 p-3 bg-white shadow-sm rounded border">
            <p class="mb-0">Akses Admin:</p> <strong>{{ $nama_admin }}</strong></p>
            <p><strong>Nama:</strong> {{ $nama_admin }}</p>
            <p><strong>Jabatan:</strong> {{ $jabatan }}</p>
        </div>
    </div>
</body>
</html>