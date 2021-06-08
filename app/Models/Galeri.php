<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KategoriGaleri;

class Galeri extends Model
{
    use HasFactory;
    protected $table = 'galeri';
    protected $fillable = ['id_kategori', 'keterangan', 'gambar'];

    public function kategoriGaleri()
	{
		return $this->belongsTo(KategoriGaleri::class,'id_kategori', 'id' );
	}
}
