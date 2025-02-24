@extends('template.header')
@section('konten')
    <div class="d-flex justify-content-center">
        <form action="{{ route('berita.simpan') }}" class="border w-100 w-sm-75 w-md-50 bg-primary rounded shadow bg-opacity-10 p-4 m-4" method="POST" enctype="multipart/form-data">
            @csrf
            <h3 class="text-center">Tambah Berita Baru</h3>

            <label for="judul" class="form-label">Judul Berita</label>
            <input type="text" name="judul" id="judul" class="form-control">

            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" name="penulis" id="penulis" class="form-control">

            <label for="doc" class="form-label">Doc</label>
            <input type="text" name="doc" id="doc" class="form-control">

            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" name="kategori" id="kategori" class="form-control">

            <label for="lokasi_id" class="form-label">Lokasi</label>
            <select name="lokasi_id" id="lokasi_id" class="form-select mb-2">
                @foreach ($lokasi as $lok)
                    <option value="{{ $lok->id }}">{{ $lok->lokasi }}</option>
                @endforeach
            </select>

            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" name="gambar[]" id="gambar" class="form-control" multiple>

            <label for="isi" class="form-label">Isi</label>
            <textarea id="editor" name="isi" class="form-control"></textarea>

            <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
            <script>
                CKEDITOR.replace('editor');
            </script>

            <input type="submit" value="Tambah Berita" class="btn btn-success my-2">
        </form>
    </div>
@endsection
