<?php

namespace App\Http\Controllers;

use App\Models\KategoriGaleri;
use Illuminate\Http\Request;
use Illuminate\Facades\DB;

class KategoriGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_galeri=KategoriGaleri::all();
        return view('kategori_galeri.index', compact('kategori_galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_kategori = KategoriGaleri::all();
        return view('kategori_galeri.create', compact('parent_kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => 'required|max:20',
            'keterangan' => 'required',
        ]);

        KategoriGaleri::create([
        'nama_kategori' => $request->nama_kategori,
        'keterangan' => $request->keterangan,
        'parent' =>$request->parent
        ]);
        return redirect('/kategori_galeri')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriGaleri  $kategoriGaleri
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriGaleri $kategoriGaleri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriGaleri  $kategoriGaleri
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriGaleri $kategoriGaleri)
    {
        return view('kategori_galeri.edit', compact('kategoriGaleri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriGaleri  $kategoriGaleri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriGaleri $kategoriGaleri)
    {
        $this->validate($request, [
            'nama_kategori' => 'required|max:20',
            'keterangan' => 'required',
        ]);

         KategoriGaleri::where('id', $kategoriGaleri->id)
            ->update([
                'nama_kategori' => $request->nama_kategori,
                'keterangan' => $request->keterangan
            ]);
        return redirect('/kategori_galeri')->with('status', 'Data berhasi diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriGaleri  $kategoriGaleri
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriGaleri $kategoriGaleri)
    {
        KategoriGaleri::destroy($kategoriGaleri->id);
        return redirect('/kategori_galeri')->with('status', 'kategori berhasil di hapus');
    }
}
