@extends('template.header')
@section('konten')
    <div>

        <h1 class="text-center">{{ $berita->judul }}</h1>

        @if ($berita->gambar->count() > 1)
            <div class="d-flex justify-content-center">
                <div id="carouselBerita" class="carousel slide w-100 w-sm-75 w-md-50" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($berita->gambar as $key => $img)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img src="{{ asset('uploads/berita/' . $img->gambar) }}" class="d-block w-100 rounded"
                                     style="height: 250px; object-fit: cover;" alt="Gambar berita">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBerita" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselBerita" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        @else
            <img src="{{ asset('uploads/berita/' . $berita->gambar->first()->gambar) }}" class="w-100 w-sm-75 w-md-50 rounded"
                 style="height: 250px; object-fit: cover;" alt="">
        @endif

        <div class="d-flex justify-content-center p-2">
            <i class="text-secondary">{{ $berita->doc }}</i>
        </div>

        <div class="d-flex justify-content-center my-3">
            <div class="w-100 w-sm-75 w-md-50" style="text-align: justify">
                <p>{!! $berita->isi !!}</p>
            </div>
        </div>

        <div class="hstack gap-3 justify-content-center">
            <h6 class="text-secondary"><b class="bi bi-pen me-1"></b>{{ $berita->penulis }}</h6>
            <h6 class="text-secondary"><b class="bi bi-calendar-date me-1"></b>{{ $berita->created_at->format('d F Y') }}</h6>
        </div>

        <div class="row m-3 justify-content-center">
            @foreach ($beritaRandom as $item)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card p-2 h-100">
                        <img src="{{ asset('uploads/berita/' . $item->gambar->first()->gambar) }}" class="w-100 rounded"
                             style="height: 250px; object-fit: cover;" alt="Gambar berita">
                        <a href="{{ route('berita.isiBerita', $item->id) }}" class="h6 link-underline link-underline-opacity-0">{{ Str::limit($item->judul, 45) }}</a>
                        <div class="hstack gap-3">
                            <small class="text-secondary bg-warning-subtle p-1 rounded"><b class="bi bi-pen me-1"></b>{{ $item->penulis }}</small>
                            <div class="d-flex align-items-center">
                                <small class="text-secondary border p-1 rounded bg-success-subtle"><b class="bi bi-tag me-1"></b>{{ $item->kategori }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
