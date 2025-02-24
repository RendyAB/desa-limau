@extends('template.header')
@section('konten')
    <div class="row justify-content-center">
        @foreach ($berita as $item)
            <!-- Kolom untuk setiap berita -->
            <div class="col-12  col-lg-6 ">
                <div class="card p-1 my-3 w-100">
                    <div class="bg-dark bg-opacity-50 w-100 h-100 top-0 rounded start-0 position-absolute" style="z-index: 1;"></div>

                    <!-- Gambar Berita -->
                    <img src="{{ asset('uploads/berita/' . $item->gambar->first()->gambar) }}" class="w-100 rounded"
                        style="height: 250px; object-fit: cover;" alt="Gambar berita">

                    <!-- Konten Berita -->
                    <div class="vstack p-3 position-absolute w-100" style="z-index: 3">
                        <h5 class="bg-primary p-1 rounded d-block bg-opacity-75 text-light text-center" style="width: 30%">
                            Kabar {{ $item->lokasi ? $item->lokasi->lokasi : 'Tidak Diketahui' }}
                        </h5>

                        <!-- Judul Berita -->
                        <a href="{{ route('berita.isiBerita', $item->id) }}"
                            class="link-underline h3 text-light link-underline-opacity-0"
                            style="font-weight: bold">{{ Str::limit($item->judul, 60) }}</a>

                        <!-- Penulis dan Tanggal -->
                        <div class="hstack align-items-center p-2 text-light gap-3">
                            <h6>
                                <a href="" class="link-underline text-light link-underline-opacity-0"><b class="bi bi-pen me-1"></b>
                                    {{ $item->penulis }}</a>
                            </h6>
                            <h6><b class="bi bi-calendar-date me-1"></b>
                                {{ $item->created_at->format('d F Y') }}</h6>
                        </div>

                        <!-- Read More Button -->
                        <div class="">
                            <a href="{{ route('berita.isiBerita', $item->id) }}" class="btn btn-primary btn-sm">Read More &gt;</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
