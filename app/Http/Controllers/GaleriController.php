<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\KategoriGaleri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::all();
        $kategori_galeri = KategoriGaleri::all();
        return view('galeri.index', compact('galeri'))->withKategoriGaleri($kategori_galeri);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $kategori_galeri = KategoriGaleri::all();
        return view ('galeri.create', compact('kategori_galeri'))->withkategori_galeri('kategori_galeri');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'keterangan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
         ]);

        $tabel_galeri = new Galeri();
        $tabel_galeri->id_kategori = $request->input('id_kategori');
        $tabel_galeri->keterangan = $request->input('keterangan');

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('uploads', $filename);
            $tabel_galeri->gambar = $filename;
            
        }
        $tabel_galeri->save();
        return redirect('/galeri')->with('status', 'Berhasil Menambah Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeri $galeri)
    {
        $galeri = Galeri::find($galeri->id);
        $kategori_galeri = KategoriGaleri::all();
        return view('galeri.edit',  compact('galeri','kategori_galeri'))->withkategori_galeri('kategori_galeri');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeri $galeri)
    {
        $galeri->id_kategori = $request->input('id_kategori');
        $galeri->keterangan = $request->input('keterangan');


        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('uploads', $filename);
            $galeri->gambar = $filename;
            
        }

        $galeri->save();
        return redirect('/galeri')->with('status', 'Berhasil Merubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeri $galeri)
    {
        Galeri::destroy($galeri->id);
        File::delete('uploads/'.$galeri->gambar);
        return redirect('/galeri')->with('status', 'data berhasil di hapus');
    }
}
