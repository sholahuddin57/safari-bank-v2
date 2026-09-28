<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Safari Bank V2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
            <h2 class="text-success fw-bold m-0">Dashboard Admin Safari Bank V2</h2>
            <div class="d-flex flex-row align-items-stretch gap-2 mt-3 mt-md-0">
            <a href="/" class="btn btn-outline-secondary d-flex align-items-center">Kembali ke Beranda</a>
            <form action="{{ route('logout') }}" method="POST" class="m-0 d-flex">
                @csrf
                <button type="submit" class="btn btn-outline-danger">Logout</button>
            </form>
            </div>
        </div>

        <!-- mau nambahkan resposeive hp-->
        <div class="card shadow-sm border-0">
            <div class="card-body">

                @if ($pengajuans->isEmpty())
                    <div class="alert alert-info text-center">
                        Tidak ada pengajuan yang tersedia.
                    </div>
                @else
                <!-- menambahkan responseive table -->
                <div class="table-responsive">
                <table class="table table-hover mb-0">
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
        @endif
        </div>
    </div>
</body>
</html>