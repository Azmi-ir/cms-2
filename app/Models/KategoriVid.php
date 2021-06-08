<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Video;


class KategoriVid extends Model
{
    use HasFactory;
    protected $table = 'kategori_vid';
    protected $fillable = ['nama_kategori', 'parent'];

    public function tabelVideo()
    {
        return $this->hasMany(Video::class, 'id_kategori', 'id');
    }

    public function getChildAttribute()
    {
    	return kategoriVid::whereParent($this->id)->get();
    }

    public function getParentAttribute()
    {
    	return kategoriVid::whereId($this->parent)->first();
    }
}
