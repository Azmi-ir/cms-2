<?php

namespace App\Http\Controllers;

use App\Models\Infografis;
use Illuminate\Http\Request;
use Illuminate\Facades\DB;
use File;

class InfografisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infografis = Infografis::all();
        return view('infografis.index', compact('infografis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('infografis.create');
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
            'judul' => 'required|max:40',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        
        $infografis = new Infografis();
        $infografis->judul= $request->input('judul');
        $infografis->deskripsi=$request->input('deskripsi');
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('gambar_infografis', $filename);
            $infografis->gambar = $filename;
            
        }

        $infografis->save();
        return redirect('infografis')->with('status', 'Data Bertasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Infografis  $infografis
     * @return \Illuminate\Http\Response
     */
    public function show(Infografis $infografis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Infografis  $infografis
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Infografis $infografis)
    {
        $infografis = Infografis::find($id);
        return view('infografis.edit',  compact('infografis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Infografis  $infografis
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Infografis $infografis)
    {
        $infografis=Infografis::find($id);
        $infografis->judul= $request->input('judul');
        $infografis->deskripsi=$request->input('deskripsi');
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('gambar_infografis', $filename);
            $infografis->gambar = $filename;
            
        }

        $infografis->save();
        return redirect('infografis')->with('status', 'Data Bertasil Dibuat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Infografis  $infografis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Infografis $infografis)
    {
        $infografis=Infografis::find($id);
        Infografis::destroy($infografis->id);
        File::delete('gambar_infografis/', $infografis->gambar);
        return redirect('/infografis')->with('status', 'data berhasil di hapus');
    }
}
