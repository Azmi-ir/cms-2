<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Facades\DB;
use file;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playlist = Playlist::all();
        return view('playlist.index', compact('playlist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('playlist.create');
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
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        
        $playlist = new Playlist();
        $playlist->judul= $request->input('judul');
        $playlist->aktif=$request->input('aktif');
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('thumbnails', $filename);
            $playlist->thumbnail = $filename;
            
        }

        $playlist->save();
        return redirect('playlist')->with('status', 'Data Bertasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function show(Playlist $playlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Playlist $playlist)
    {
        $playlist=Playlist::find($playlist->id);
        return view('playlist.edit', compact('playlist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Playlist $playlist)
    {
        $playlist=Playlist::find($playlist->id);
        $playlist->judul= $request->input('judul');
        $playlist->aktif= $request->input('aktif');
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('thumbnails', $filename);
            $playlist->thumbnail = $filename;
            
        }

        $playlist->save();
        return redirect('playlist')->with('status', 'Data Bertasil Dibuat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Playlist $playlist)
    {
        Playlist::destroy($playlist->id);
        File::delete('thumbnails/'.$playlist->thumbnail);
        return redirect('/playlist')->with('status', 'data berhasil di hapus');
    }
}
