<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Aplikasi;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Infografis;
use App\Models\Kategori;
use App\Models\KategoriGaleri;
use App\Models\KategoriVid;
use App\Models\Pengumuman;
use App\Models\Playlist;
use App\Models\Video;
use App\Models\User;

class DashboardController extends Controller
{
    function Dashboard(){
    	$agenda          = Agenda::count();
    	$aplikasi        = Aplikasi::count();
    	$berita          = Berita::count();
    	$galeri          = Galeri::count();
    	$infografis      = Infografis::count();
    	$kategori        = Kategori::count();
    	$kategori_galeri = KategoriGaleri::count();
    	$kategori_vid    = KategoriVid::count();
    	$pengumuman      = Pengumuman::count();
    	$playlist        = Playlist::count();
    	$video           = Video::count();
        $user            = User::count();
    	return view('dashboard.dashboard', compact('agenda', 'aplikasi', 'berita','infografis', 'galeri', 'kategori', 'kategori_galeri', 'kategori_vid', 'pengumuman', 'playlist', 'video', 'user'));
    }
}
