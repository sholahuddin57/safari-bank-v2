<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Safari Bank V2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    
    <div class="card shadow-sm border-0" style="width: 400px;">
        <div class="card-body p-5">
            <h3 class="text-success fw-bold text-center mb-4">Safari Bank V2</h3>
            @error('email')
                <div class="alert alert-danger text-center small p-2 mb-3">
                    {{ $message }}
                </div>
            @enderror

            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label text-secondary">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="email" required>
                </div>
                <div class="mb-4">
                    <label class="form-label text-secondary">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="password" required>
                </div>
                <button type="submit" class="btn btn-success w-100 fw-bold">Masuk ke Dashboard</button>
            </form>
            
        </div>
    </div>

</body>
</html>