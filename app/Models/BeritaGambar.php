<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaGambar extends Model
{
    use HasFactory;

    protected $table = 'berita_gambar'; // Sesuaikan dengan nama tabel

    protected $fillable = ['berita_id', 'gambar'];

    public function berita()
    {
        return $this->belongsTo(Berita::class, 'berita_id');
    }
}
