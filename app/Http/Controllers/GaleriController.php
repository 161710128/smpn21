<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use App\Kategori_galeri;
use File;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeris = Galeri::with('Kategorigaleri')->get();
        return view('galeri.index', compact('galeris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategorigaleris = Kategori_galeri::all();
        return view('galeri.create', compact('kategorigaleris'));
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
            'id_kategorigaleri' => '',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $galeris = new Galeri;
        $galeris->id_kategorigaleri = $request->id_kategorigaleri;
        $galeris->deskripsi = $request->deskripsi;
        $galeris->gambar = $request->gambar;

        if ($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $destinationPatch = public_path().'/assets/img/gambar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces = $file->move($destinationPatch, $filename);
            $galeris->gambar = $filename;
        }
        $galeris->save();
        return redirect()->route('galeri.index');
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
        $galeris = Galeri::findOrFail($id);
        $kategorigaleris = Kategori_galeri::all();
        $selectkategorigaleris = Galeri::findOrFail($id)->id_kategorigaleri;
        return view('galeri.edit', compact('galeris','kategorigaleris','selectkategorigaleris'));
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
            'id_kategorigaleri' => '',
            'deskripsi' => 'required',
            'gambar' => ''
        ]);

        $galeris = Galeri::findOrFail($id);
        $galeris->id_kategorigaleri = $request->id_kategorigaleri;
        $galeris->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $destinationPatch = public_path().'/assets/img/gambar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces = $file->move($destinationPatch, $filename);

        if ($galeris->gambar) { 
        $old_gambar = $galeris->gambar;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/gambar'
        . DIRECTORY_SEPARATOR . $galeris->gambar;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }    
        }
        $galeris->gambar = $filename;
    }
        $galeris->save();
        return redirect()->route('galeri.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeris = Galeri::findOrFail($id);
        if ($galeris->gambar) {
            $old_foto = $galeris->gambar;
            $filepath = public_path(). DIRECTORY_SEPARATOR . 'assets/img/gambar/' . DIRECTORY_SEPARATOR . $galeris->gambar;
            try{
                File::delete($filepath);
            } catch (FileNotFoundException $e){
                // file sudah dihapus
            }
        }
    $galeris->delete();
    return redirect()->route('galeri.index');
    }
}
