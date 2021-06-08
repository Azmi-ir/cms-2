<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Galeri;

class KategoriGaleri extends Model
{
    use HasFactory;
    protected $table = 'kategori_galeri';
    protected $fillable = ['nama_kategori', 'keterangan', 'parent'];

    public function tabelGaleri()
	{
		return $this->hasMany(Galeri::class,'id_kategori', 'id' );
	}

	public function getChildAttribute()
    {
    	return KategoriGaleri::whereParent($this->id)->get();
    }

    public function getParentAttribute()
    {
    	return KategoriGaleri::whereId($this->parent)->first();
    }
}
