<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Infografis;
use App\Models\Aplikasi;
use App\Models\Playlist;
use App\Models\Pengumuman;
use App\Models\Agenda;
use App\Models\Galeri;
use File;

class FrontendController extends Controller
{
    
    public function index()
    {    
        $berita = Berita::paginate(4);
        $kategori = Kategori::where('parent', null)->get();
        $kategori2 = Kategori::all();
        $infografis = Infografis::all();
        $aplikasi = Aplikasi::all();
        $playlist = Playlist::all();
        $pengumuman = Pengumuman::paginate(5);
        $agenda = Agenda::paginate(5);
        $galeri = Galeri::all();
        return view('frontend.template2.index', compact('berita', 'kategori', 'infografis','kategori2', 'aplikasi','playlist', 'pengumuman', 'agenda', 'galeri'));
    }

    public function show($id)
    {   
        
        $berita = Berita::find($id);
        $kategori = Kategori::all();
        return view('frontend.template2.berita', compact('berita','kategori'))->withKategoriBerita('kategori');
    }

    public function kategoriBerita(Kategori $kategoriBerita)
    {
        $kategori=Kategori::all();
        $tabel_berita = $kategoriBerita->tabelBerita()->get();
        return view('frontend.template2.kategoriBerita', compact('tabel_berita', 'kategoriBerita', 'kategori'));
    }
}
