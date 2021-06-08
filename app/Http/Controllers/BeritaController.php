<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use File;
class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriberita = Kategori::all();
            $berita = Berita::all();
            return view('berita.index', compact('berita', 'kategoriberita'))->withKategoriBerita($kategoriberita);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoriberita = Kategori::all();
        return view('berita.create')->withKategoriBerita($kategoriberita);
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
        'judul_berita' => 'required',
        'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'isi_berita' => 'required'
    ]);
        $berita = new Berita();
        $berita->judul_berita= $request->input('judul_berita');
        $berita->id_kategori = $request->input('id_kategori');
        $berita->alias = $request->input('alias');
        $berita->isi_berita  = $request->input('isi_berita');
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('thumbnails', $filename);
            $berita->thumbnail = $filename;
            
        }

        $berita->save();
        return redirect('/berita')->with('status', 'berita berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($id, Berita $berita)
    {
        $tabel_berita = Berita::find($id);
        return view('berita.show', compact('tabel_berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Berita $berita)
    {
        $berita = Berita::find($id);
        $kategoriBeritas = Kategori::all();
        return view('berita.edit', compact('berita'))->withKategoriBerita($kategoriBeritas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Berita $berita)
    {

        $berita = Berita::find($id);
        $berita->judul_berita= $request->input('judul_berita');
        $berita->id_kategori = $request->input('id_kategori');
        $berita->isi_berita  = $request->input('isi_berita');
        

        
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('thumbnails', $filename);
            $berita->thumbnail = $filename;
            
        }

        $berita->save();
        return redirect('/berita')->with('status', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Berita $berita)
    {
        $tabel_berita = Berita::where('id',$id)->first();
        File::delete('thumbnails/'.$tabel_berita->thumbnail);
        Berita::where('id',$id)->delete();
        return redirect('/berita')->with('status', 'Data berhasil di hapus');
    }

    public function ckeditor(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('images'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName); 
            $msg = 'Image successfully uploaded'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
    }
}
}
