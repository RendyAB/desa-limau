<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BeritaGambar;

class Berita extends Model
{
    protected $table = 'berita';
    protected $fillable = ['judul', 'penulis', 'kategori', 'lokasi_id', 'isi', 'doc', 'gambar'];

    public function lokasi()
    {
        return $this->belongsTo(LokasiBerita::class, 'lokasi_id');
    }

    public function gambar()
    {
        return $this->hasMany(BeritaGambar::class, 'berita_id');
    }
}
