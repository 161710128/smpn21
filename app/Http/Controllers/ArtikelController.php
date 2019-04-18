<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Tag;
use App\Kategori_artikel;
use File;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels = Artikel::with('Kategoriartikel')->get();
        return view('artikel.index', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoriartikels = Kategori_artikel::all();
        $tags = Tag::all();
        return view('artikel.create', compact('kategoriartikels','tags'));
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
            'id_kategoriartikel' => 'required|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul'=>'required|unique:artikels',
            'tag'=>'required',
            'deskripsi'=>'required|max:2000'
        ]);

        $artikels = new Artikel;
        $artikels->id_kategoriartikel = $request->id_kategoriartikel;
        $artikels->judul = $request->judul;
        $artikels->deskripsi = $request->deskripsi; 
        $artikels->gambar = $request->gambar;
        $artikels->slug = str_slug($request->judul, '-');

        if ($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $destinationPatch = public_path().'/assets/img/gambar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces = $file->move($destinationPatch, $filename);
            $artikels->gambar = $filename;
        }
        $artikels->save();
        $artikels->Tag()->attach($request->tag);
        return redirect()->route('artikel.index');
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
        $artikels = Artikel::findOrFail($id);
        $kategoriartikels = Kategori_artikel::all();
        $selectkategoriartikels = Artikel::findOrFail($id)->id_kategoriartikel;
        $selected = $artikels->Tag->pluck('id')->toArray();
        $tags = Tag::all();
        return view('artikel.edit', compact('artikels','kategoriartikels','selected','tags','selectkategoriartikels'));
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
            'judul' => 'required|max:255',
            'id_kategoriartikel' => 'required',
            'gambar' => '',
            'tag'=>'required|max:255',
            'deskripsi' => 'required|max:2000'
        ]);

        $artikels = Artikel::findOrFail($id);
        $artikels->id_kategoriartikel = $request->id_kategoriartikel;
        $artikels->judul = $request->judul;
        $artikels->deskripsi = $request->deskripsi;
        $artikels->slug =str_slug($request->judul, '-');

        if ($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $destinationPatch = public_path().'/assets/img/gambar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces = $file->move($destinationPatch, $filename);

        if ($artikels->gambar) { 
        $old_gambar = $artikels->gambar;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/gambar/'
        . DIRECTORY_SEPARATOR . $artikels->gambar;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }    
        }
        $artikels->gambar = $filename;
    }
        $artikels->save();
        $artikels->Tag()->sync($request->tag);
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikels = Artikel::findOrFail($id);
        if ($artikels->gambar) {
            $old_foto = $artikels->gambar;
            $filepath = public_path(). DIRECTORY_SEPARATOR . 'assets/img/gambar/' . DIRECTORY_SEPARATOR . $artikels->gambar;
            try{
                File::delete($filepath);
            } catch (FileNotFoundException $e){
                // file sudah dihapus
            }
        }
    $artikels->delete();
    return redirect()->route('artikel.index');
    }
}
