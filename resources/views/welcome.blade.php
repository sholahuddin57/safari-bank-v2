<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Safari Bank V2</title>
    <!-- Memanggil Bootstrap dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
    <div class="text-center">
        <h1 class="text-success fw-bold">Selamat Datang di Safari Bank V2 🚀</h1>
        <p class="text-muted">Sistem perbankan ini dibangun dengan arsitektur Enterprise MVC Laravel.</p>

        <div class="mt-4 p-3 bg-white shadow-sm rounded border">
            <p class="mb-0">Akses Admin:</p> <strong>{{ $nama_admin }}</strong></p>
            <p><strong>Nama:</strong> {{ $nama_admin }}</p>
            <p><strong>Jabatan:</strong> {{ $jabatan }}</p>
        </div>
    </div>

    <div class="mt-4 p-4 bg -white shadow-sm rounded border text-start">
        <h4 class="text-success mb-3 text-center">Formulir Pengajuan Baru</h4>
    </div>

    @if (session('sukses')) 
        <div class="alert alert-success text-center">
            {{ session('sukses') }}
        </div>
        @endif
    
    <form action="/Pengajuan Baru" method="POST">
        @csrf 
        <div class="mb-3">
            <label for="nama_produk" class="form-label">Pilih Produk Bank</label>
            <select name="nama_produk" id="nama_produk" class="form-select" required>
                <option value="Tabungan Safari">Tabungan Safari</option>
                <option value="Kredit Safari">Kredit Safari</option>
                <option value="Pinjaman Safari">Pinjaman Safari</option>
                <option value="Investasi Safari">Investasi Safari</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success w-100">Ajukan Sekarang</button>
    </form>
</body>
</html>