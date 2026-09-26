<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Safari Bank V2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-success fw-bold">Dashboard Admin Safari Bank V2</h2>
            <a href="/" class="btn btn-outline-secondary">Kembali ke Beranda</a>
        </div>
        
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="table-success">
                        <tr>
                            <th>ID</th>
                            <th>Nama Produk</th>
                            <th>Status</th>
                            <th>Waktu Pengajuan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Looping data menggunakan Blade -->
                        @foreach ($pengajuans as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama_produk }}</td>
                            <td>
                                 @if (strtolower($item->status) === 'disetujui')
                                <span class="badge bg-success text-white">{{ $item->status }}</span>
                                @else
                                 <span class="badge bg-warning text-dark">{{ $item->status }}</span>
                                @endif
                            </td>
                            <td>{{ $item->created_at }}</td>

                            <td>
                                <div class="d-flex gap-2">

                                    @if (strtolower($item->status) !== 'disetujui')
                                    <form action="/pengajuan/{{ $item->id }}/setujui" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success btn-sm">Setujui</button>
                                    </form>
                                    @endif
                               
                                    <form action="/pengajuan/{{ $item->id }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengajuan ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                     </form>

                                 </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>