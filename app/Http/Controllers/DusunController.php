<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class DusunController extends Controller
{
    //

    function limau()
    {
        $berita = Berita::where('lokasi_id', 1)->get(); // Ambil semua berita dengan lokasi_id = 1
        $title = 'Limau';
        return view('dusun.limau', compact('berita', 'title'));
    }

    // function sidorejo()
    // {
    //     $berita = Berita::where('lokasi_id', 2)->get(); // Ambil semua berita dengan lokasi_id = 1
    //     $title = 'Sidorejo';
    //     // $beritaImg = Berita::all();
    //     return view('dusun.sidorejo', compact('berita', 'title'));
    // }

    function sidorejo()
{
    $berita = Berita::where('lokasi_id', 2)->with('gambar')->get(); // Load relasi gambar
    $title = 'Sidorejo';
    return view('dusun.sidorejo', compact('berita', 'title'));
}

    function senala()
    {
        $title = 'Senala';
        $berita = Berita::where('lokasi_id', 3)->get(); // Ambil semua berita dengan lokasi_id = 1

        return view('dusun.senala', compact('berita', 'title'));
    }
}
