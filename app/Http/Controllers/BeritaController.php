<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\BeritaGambar;
use App\Models\LokasiBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BeritaController extends Controller
{
    function tampil()
    {
        $berita = Berita::all();
        $title = 'Daftar Berita';
        return view('berita.view', compact('berita', 'title'));
    }
//     function tampil()
// {
//     $berita = Berita::with('lokasi')->get(); // Tambahkan with('lokasi')
//     $title = 'Daftar Berita';
//     return view('berita.view', compact('berita', 'title'));
// }


    function berita()
    {
        $lokasi = LokasiBerita::all();
        $berita = Berita::all();
        $title = 'Berita';
        return view('berita.berita', compact('berita', 'title', 'lokasi'));
    }

    function isiBerita($id)
    {
        $berita = Berita::find($id);
        $title = $berita->judul;
        $beritaRandom = Berita::where('id', '!=', $id)->inRandomOrder()->limit(3)->get();

        $paragraf = explode("\n", $berita->isi);

        if (count($paragraf) > 2) {
            $posisiRandom = rand(1, count($paragraf) - 2);

            $beritaTambahan = $beritaRandom->first();

            $beritaTambahanHtml = "<p><strong>Baca juga:</strong> <a href='" . route('berita.isiBerita', $beritaTambahan->id) . "'>" . $beritaTambahan->judul . "</a></p>";

            array_splice($paragraf, $posisiRandom, 0, $beritaTambahanHtml);
        }

        $berita->isi = implode("\n", $paragraf);

        return view('berita.isi', compact('berita', 'title', 'beritaRandom'));
    }

    function tambah()
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login')->with('error', 'Silakan login dulu!');
        }

        $title = 'Tambah Berita';
        $lokasi = LokasiBerita::all();
        return view('berita.tambah', compact('title', 'lokasi'));
    }

    function simpan(Request $request)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login')->with('error', 'Silakan login dulu!');
        }

        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'kategori' => 'required',
            'lokasi_id' => 'required',
            'isi' => 'required',
            'gambar.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validasi untuk multiple gambar
        ]);

        // Simpan berita dulu, tanpa gambar
        $berita = Berita::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'kategori' => $request->kategori,
            'lokasi_id' => $request->lokasi_id,
            'isi' => $request->isi,
            'doc' => $request->doc,
        ]);

        // Jika ada gambar diunggah, simpan ke storage
        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $file) {
                $filename = time() . '-' . $file->getClientOriginalName();
                $file->move(public_path('uploads/berita'), $filename);

                // Simpan nama file ke tabel berita_gambar
                $berita->gambar()->create(['gambar' => $filename]);
            }
        }

        return redirect()->route('berita.tampil');
    }

    function edit($id)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login')->with('error', 'Silakan login dulu!');
        }

        $berita = Berita::find($id);
        $title = 'Edit Berita';
        $lokasi = LokasiBerita::all();

        return view('berita.edit', compact('berita', 'title', 'lokasi'));
    }

    
    public function update(Request $request, Berita $berita)
{
    if (!Session::has('admin')) {
        return redirect()->route('admin.login')->with('error', 'Silakan login dulu!');
    }

    $request->validate([
        'judul' => 'required',
        'penulis' => 'required',
        'kategori' => 'required',
        'lokasi_id' => 'required',
        'isi' => 'required',
        'gambar.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validasi untuk multiple gambar
    ]);

    // Update berita
    $berita->update([
        'judul' => $request->judul,
        'penulis' => $request->penulis,
        'kategori' => $request->kategori,
        'lokasi_id' => $request->lokasi_id,
        'isi' => $request->isi,
        'doc' => $request->doc,
    ]);

    // Jika ada gambar baru, hapus gambar lama dan simpan yang baru
    if ($request->hasFile('gambar')) {
        // Hapus gambar lama dari database dan storage
        foreach ($berita->gambar as $oldImage) {
            $oldFilePath = public_path('uploads/berita/' . $oldImage->gambar);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath); // Hapus file lama dari folder
            }
            $oldImage->delete(); // Hapus record dari database
        }

        // Simpan gambar baru
        foreach ($request->file('gambar') as $file) {
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('uploads/berita'), $filename);

            // Simpan nama file ke tabel berita_gambar
            $berita->gambar()->create(['gambar' => $filename]);
        }
    }

    return redirect()->route('berita.tampil')->with('success', 'Berita berhasil diperbarui!');
}


    function hapus($id)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login')->with('error', 'Silakan login dulu!');
        }

        $berita = Berita::find($id);
        $berita->delete();
        return redirect()->route('berita.tampil');
    }
}
