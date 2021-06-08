<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KategoriVid;
use App\Models\Playlist;

class Video extends Model
{
    use HasFactory;
    protected $table = 'video';
    protected $fillable = ['id_kategori', 'id_playlist', 'judul_vid', 'deskripsi', 'video'];

    public function kategoriVid()
    {
    	return $this->belongsTo(KategoriVid::class, 'id_kategori', 'id');
    }

    public function playlistVid()
    {
    	return $this->belongsTo(Playlist::class, 'id_playlist', 'id');
    } 
}
