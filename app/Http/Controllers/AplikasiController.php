<?php

namespace App\Http\Controllers;

use App\Models\Aplikasi;
use Illuminate\Http\Request;
use File;
class AplikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aplikasi = Aplikasi::all();
        return view('aplikasi.index', compact('aplikasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aplikasi.create');
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
            'nama_app' => 'required|max:40',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'url' =>'required'
        ]);

        
        $aplikasi = new Aplikasi();
        $aplikasi->nama_app= $request->input('nama_app');
        $aplikasi->url=$request->input('url');
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('thumbnail_aplikasi', $filename);
            $aplikasi->thumbnail = $filename;
            
        }

        $aplikasi->save();
        return redirect('aplikasi')->with('status', 'Data Bertasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aplikasi  $aplikasi
     * @return \Illuminate\Http\Response
     */
    public function show(Aplikasi $aplikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aplikasi  $aplikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Aplikasi $aplikasi)
    {
        $aplikasi = Aplikasi::find($aplikasi->id);
        return view('aplikasi.edit', compact('aplikasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aplikasi  $aplikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aplikasi $aplikasi)
    {
        
        $aplikasi->nama_app= $request->input('nama_app');
        $aplikasi->url=$request->input('url');
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('thumbnail_aplikasi', $filename);
            $aplikasi->thumbnail = $filename;
            
        }

        $aplikasi->save();
        return redirect('aplikasi')->with('status', 'Data Bertasil Dibuat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aplikasi  $aplikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aplikasi $aplikasi)
    {
        Aplikasi::destroy($aplikasi->id);
        File::delete('thumbnail_aplikasi/'.$aplikasi->thumbnail);
        return redirect('/aplikasi')->with('status', 'data berhasil di hapus');
    }
}
