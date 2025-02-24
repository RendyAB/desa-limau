<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LokasiBerita extends Model
{
    use HasFactory;

    protected $table = 'lokasi';
    protected $fillable = ['lokasi'];

    // Relasi ke Berita (One to Many)
    public function berita()
    {
        return $this->hasMany(Berita::class, 'lokasi_id');
    }
}
