<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8 col-10"> <!-- Responsif -->
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-4">
                        <h3 class="text-center mb-4 text-primary">
                            <i class="fas fa-user-lock"></i> Login Admin
                        </h3>

                        @if(session('error'))
                        <div class="alert alert-danger text-center">{{ session('error') }}</div>
                        @endif

                        <form action="{{ route('admin.login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 btn-lg shadow-sm">Login</button>
                        </form>
                    </div>
                </div>

                {{-- <p class="text-center mt-3 text-muted small">© {{ date('Y') }} Admin Panel</p> --}}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
