<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Dashboard Admin</h2>
        <p>Selamat datang di dashboard!</p>
        <div class="hstack gap-2 my-3">
            <a href="{{route('berita.tambah')}}" class="btn btn-success">tambah berita</a>
            <a href="{{route('berita.tampil')}}" class="btn btn-primary">Daftar Berita</a>
        </div>

        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</body>
</html>
