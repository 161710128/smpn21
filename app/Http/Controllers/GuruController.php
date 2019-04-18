<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use App\Jabatan;
use File;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurus = Guru::with('Jabatan')->get();
        return view('guru.index', compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatans = Jabatan::all();
        return view('guru.create', compact('jabatans'));
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
            'id_jabatan' => 'required|max:255',
            'gambar' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_guru'=>'required|max:255|unique:gurus',
            'mata_pelajaran'=>'required|max:255'
        ]);

        $gurus = new Guru;
        $gurus->id_jabatan = $request->id_jabatan;
        $gurus->mata_pelajaran = $request->mata_pelajaran;
        $gurus->nama_guru = $request->nama_guru;
        $gurus->gambar = $request->gambar;

        if ($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $destinationPatch = public_path().'/assets/img/gambar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces = $file->move($destinationPatch, $filename);
            $gurus->gambar = $filename;
        }
        $gurus->save();
        return redirect()->route('guru.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gurus = Guru::findOrFail($id);
        $jabatans = Jabatan::all();
        $selectjabatans = Guru::findOrFail($id)->id_jabatan;
        return view('guru.edit', compact('gurus','jabatans','selectjabatans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id_jabatan' => 'required|max:255',
            'gambar' => '',
            'nama_guru'=>'required|max:255',
            'mata_pelajaran'=>'required|max:255'
        ]);

        $gurus = Guru::FindOrFail($id);
        $gurus->id_jabatan = $request->id_jabatan;
        $gurus->mata_pelajaran = $request->mata_pelajaran;
        $gurus->nama_guru = $request->nama_guru;
        $gurus->gambar = $request->gambar;

        if ($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $destinationPatch = public_path().'/assets/img/gambar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces = $file->move($destinationPatch, $filename);

            if ($gurus->gambar) { 
                $old_gambar = $gurus->gambar;
                $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/gambar/'
                . DIRECTORY_SEPARATOR . $gurus->gambar;
                    try {
                    File::delete($filepath);
                    } catch (FileNotFoundException $e) {
                // File sudah dihapus/tidak ada
                    }    
                }
                $gurus->gambar = $filename;
            }
                $gurus->save();
                return redirect()->route('guru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gurus = Guru::FindOrFail($id);
        if ($gurus->gambar) {
            $old_foto = $gurus->gambar;
            $filepath = public_path(). DIRECTORY_SEPARATOR . 'assets/img/gambar/' . DIRECTORY_SEPARATOR . $gurus->gambar;
            try{
                File::delete($filepath);
            } catch (FileNotFoundException $e){
                // file sudah dihapus
            }
        }
    $gurus->delete();
    return redirect()->route('guru.index');
    }
}
