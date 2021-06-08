<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Facades\DB;
use File;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumuman = Pengumuman::all();
        return view('pengumuman.index', compact('pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengumuman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
        'judul_pengumuman' => 'required',
        'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
        $pengumuman = new Pengumuman();
        $pengumuman->judul_pengumuman= $request->input('judul_pengumuman');
        $pengumuman->isi_pengumuman  = $request->input('isi_pengumuman');
        if ($request->hasFile('dokumen')) {
            $file = $request->file('dokumen');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('dokumen_pengumuman', $filename);
            $pengumuman->dokumen = $filename;
            
        }

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('thumbnail_pengumuman', $filename);
            $pengumuman->thumbnail = $filename;
            
        }
        $pengumuman->save();
        return redirect('/pengumuman')->with('status', 'berita berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman $pengumuman)
    {
        $pengumuman = Pengumuman::find($pengumuman->id);
        return view('pengumuman.show', compact('pengumuman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengumuman $pengumuman)
    {
        $pengumuman = Pengumuman::find($pengumuman->id);
        return view('pengumuman.edit', compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        $pengumuman = Pengumuman::find($pengumuman->id);
        $pengumuman->judul_pengumuman= $request->input('judul_pengumuman');
        $pengumuman->dokumen = $request->input('dokumen');
        $pengumuman->isi_pengumuman  = $request->input('isi_pengumuman');

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('thumbnail_pengumuman', $filename);
            $pengumuman->thumbnail = $filename;
            
        }
        $pengumuman->save();
        return redirect('/pengumuman')->with('status', 'berita berhasil dibuat');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        Pengumuman::destroy($pengumuman->id);
        File::delete('thumbnail_pengumuman/'.$pengumuman->thumbnail);
        return redirect('/pengumuman')->with('status', 'Data berhasil di hapus');
    }
}
