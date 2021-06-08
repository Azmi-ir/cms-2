<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $fillable = ['id_kategori, judul_berita, thumbnail, publisher, alias, isi_berita,'];


    public function kategoriBerita()
    {
    	return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }
}
