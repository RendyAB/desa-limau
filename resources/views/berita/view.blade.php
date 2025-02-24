@extends('template.header')
@section('konten')
    <a href="{{ route('berita.tambah') }}" class="btn btn-primary my-3">Tambah berita</a>

    <div class="table-responsive">
        <table class="table text-center table-striped border-dark table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Kategori</th>
                    <th>Lokasi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($berita as $no => $item)
                    <tr>
                        <td>{{ $no + 1 }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->penulis }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->lokasi->lokasi ?? 'Tidak Ada' }}</td>
                        <td>{{ Str::limit($item->gambar, 25) }}</td>
                        <td>
                            <div class="hstack w-100 gap-2 justify-content-center">
                                <a href="{{ route('berita.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('berita.hapus', $item->id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
