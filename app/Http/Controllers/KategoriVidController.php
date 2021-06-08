<?php

namespace App\Http\Controllers;

use App\Models\KategoriVid;
use Illuminate\Http\Request;
use Illuminate\Facades\DB;
class KategoriVidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori=KategoriVid::all();
        return view('kategori_vid.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $parent_kategori = KategoriVid::all();
        return view('kategori_vid.create', compact('parent_kategori'));
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
            'nama_kategori' => 'required|max:20'
        ]);

        KategoriVid::create([
        'nama_kategori' => $request->nama_kategori,
        'parent' =>$request->parent
        ]);
        return redirect('kategori_vid')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriVid  $kategoriVid
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriVid $kategoriVid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriVid  $kategoriVid
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriVid $kategoriVid)
    {
        return view('kategori_vid.edit', compact('kategoriVid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriVid  $kategoriVid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriVid $kategoriVid)
    {
        $this->validate($request, [
            'nama_kategori' => 'required|max:20',
        ]);

         KategoriVid::where('id', $kategoriVid->id)
            ->update([
                'nama_kategori' => $request->nama_kategori,
            ]);
        return redirect('kategori_vid')->with('status', 'Data berhasi diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriVid  $kategoriVid
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriVid $kategoriVid)
    {
        KategoriVid::destroy($kategoriVid->id);
        return redirect('kategori_vid')->with('status', 'kategori berhasil di hapus');
    }
}
