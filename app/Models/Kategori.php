<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Berita;


class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $fillable = ['nama_kategori', 'keterangan', 'parent'];

    public function tabelBerita()
    {
        return $this->hasMany(Berita::class, 'id_kategori', 'id');
    }

    public function getChildAttribute()
    {
    	return Kategori::whereParent($this->id)->get();
    }

    public function getParentAttribute()
    {
    	return Kategori::whereId($this->parent)->first();
    }
}
