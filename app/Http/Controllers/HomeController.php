<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    function tampil(){
        $title='Desa Limau';
        $beritaHead=Berita::latest()->skip(1)->first();
        $beritaRandom = Berita::inRandomOrder()->limit(2)->get(); // Ambil 3 berita acak

        return view('welcome',compact('title','beritaHead','beritaRandom'));
    }


}
