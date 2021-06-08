<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori=kategori::all();
        return view('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_kategori = Kategori::all();
        return view('kategori.create', compact('parent_kategori'));
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

        Kategori::create([
        'nama_kategori' => $request->nama_kategori,
        'keterangan' => $request->keterangan,
        'parent' =>$request->parent
        ]);
        return redirect('/kategori')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        $this->validate($request, [
            'nama_kategori' => 'required|max:20',
            'keterangan' => 'required',
        ]);

         Kategori::where('id', $kategori->id)
            ->update([
                'nama_kategori' => $request->nama_kategori,
                'keterangan' => $request->keterangan
            ]);
        return redirect('/kategori')->with('status', 'Data berhasi diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        Kategori::destroy($kategori->id);
        return redirect('/kategori')->with('status', 'kategori berhasil di hapus');
    }
}
