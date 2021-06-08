<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Video;

class Playlist extends Model
{
    use HasFactory;
    protected $table ='playlist';
    protected $fillable = ['judul', 'thumbnail', 'aktif'];
    public function tabelVideo()
    {
    	return $this->hasMany(Video::class, 'id_playlist', 'id');
    }
}
