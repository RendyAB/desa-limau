{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary bg-opacity-75 sticky-top py-2">
        <div class="container-fluid ">
            <a class="navbar-brand text-dark link-underline link-underline-opacity-0" href="{{ route('home') }}" style="font-weight: bold">Desa Limau</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dusun
                        </a>
                        <ul class="dropdown-menu text-light" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('dusun.limau') }}">Limau</a></li>
                            <li><a class="dropdown-item" href="{{ route('dusun.sidorejo') }}">Sidorejo</a></li>
                            <li><a class="dropdown-item" href="{{ route('dusun.senala') }}">Senala</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('berita.berita') }}">Berita</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        @yield('konten')
    </div>

    <!-- Footer -->
    @include('template.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* Ensure full height for body and html */
        html, body {
            height: 100%;
        }

        /* Make the body a flex container, push footer to bottom */
        body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Push footer to the bottom */
        .container {
            flex: 1;
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary bg-opacity-75 sticky-top py-2">
        <div class="container-fluid ">
            <a class="navbar-brand text-dark link-underline link-underline-opacity-0" href="{{ route('home') }}" style="font-weight: bold">Desa Limau</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dusun
                        </a>
                        <ul class="dropdown-menu text-light" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('dusun.limau') }}">Limau</a></li>
                            <li><a class="dropdown-item" href="{{ route('dusun.sidorejo') }}">Sidorejo</a></li>
                            <li><a class="dropdown-item" href="{{ route('dusun.senala') }}">Senala</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('berita.berita') }}">Berita</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        @yield('konten')
    </div>

    <!-- Footer -->
    @include('template.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

