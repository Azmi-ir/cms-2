<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\KategoriVid;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_vid = KategoriVid::all();
        $playlist = Playlist::all();
        $video = Video::all();
        return view('video.index', compact('kategori_vid', 'playlist', 'video'))->withkategoriVId($kategori_vid)->withplaylistVideo($playlist);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_vid = KategoriVid::all();
        $playlist = Playlist::all();
        return view('video.create')->withkategoriVid($kategori_vid)->withplaylistVideo($playlist);
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
            'judul_vid' => 'required|max:40',
            'id_kategori' => 'required',
            'id_playlist' => 'required',
            'video' => 'required|max:100',
            'deskripsi' =>'required'
        ]);

        Video::create([
        'judul_vid' => $request->judul_vid,
        'id_kategori' => $request->id_kategori,
        'id_playlist' => $request->id_playlist,
        'video' => $request->video,
        'deskripsi' => $request->deskripsi
        ]);
        return redirect('/video')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        $video = Video::find($video->id);
        $kategori_vid = KategoriVid::all();
        $playlist = Playlist::all();
        return view('video.edit', compact('video', 'kategori_vid', 'playlist'))->withkategoriVid($kategori_vid)->withplaylistVideo($playlist);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $this->validate($request, [
            'judul_vid' => 'required|max:40',
            'id_kategori' => 'required',
            'id_playlist' => 'required',
            'video' => 'required|max:100',
            'deskripsi' =>'required'
        ]);

         Video::where('id', $video->id)
            ->update([
                'judul_vid' => $request->judul_vid,
                'id_kategori' => $request->id_kategori,
                'id_playlist' => $request->id_playlist,
                'video' => $request->video,
                'deskripsi' => $request->deskripsi
        ]);
        return redirect('/video')->with('status', 'Data berhasi diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        Video::destroy($video->id);
        return redirect('/video')->with('status', 'kategori berhasil di hapus');
    }
}
