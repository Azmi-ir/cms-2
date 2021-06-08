<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use File;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agenda = Agenda::all();
        return view('agenda.index', compact('agenda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agenda.create');
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
            'nama_agenda' => 'required|max:40',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        
        $agenda = new Agenda();
        $agenda->nama_agenda= $request->input('nama_agenda');
        $agenda->tempat= $request->input('tempat');
        $agenda->pengirim= $request->input('pengirim');
        $agenda->tgl_mulai= $request->input('tgl_mulai');
        $agenda->tgl_selesai= $request->input('tgl_selesai');
        $agenda->jam= $request->input('jam');
        $agenda->isi_agenda= $request->input('isi_agenda');
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('gambar_agenda', $filename);
            $agenda->gambar = $filename;
            
        }

        $agenda->save();
        return redirect('agenda')->with('status', 'Data Bertasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(Agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit(Agenda $agenda)
    {
        $agenda = Agenda::find($agenda->id);
        return view('agenda.edit', compact('agenda'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agenda $agenda)
    {
        $agenda = Agenda::find($agenda->id);
        $agenda->nama_agenda= $request->input('nama_agenda');
        $agenda->tempat= $request->input('tempat');
        $agenda->pengirim= $request->input('pengirim');
        $agenda->tgl_mulai= $request->input('tgl_mulai');
        $agenda->tgl_selesai= $request->input('tgl_selesai');
        $agenda->jam= $request->input('jam');
        $agenda->isi_agenda= $request->input('isi_agenda');
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('gambar_agenda', $filename);
            $agenda->gambar = $filename;
            
        }

        $agenda->save();
        return redirect('agenda')->with('status', 'Data Bertasil Dibuat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agenda $agenda)
    {
        Agenda::destroy($agenda->id);
        File::delete('gambar_agenda/'.$agenda->gambar);
        return redirect('/agenda')->with('status', 'data berhasil di hapus');
    }
}
