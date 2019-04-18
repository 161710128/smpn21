<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Kategori_artikel;

class KategoriartikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriartikels = Kategori_artikel::all();
        return view('kategoriartikel.index', compact('kategoriartikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategoriartikel.create');
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
            'nama_artikel' => 'required|max:255|unique:kategori_artikels'
        ]);

        $kategoriartikels = new Kategori_artikel;
        $kategoriartikels->nama_artikel = $request->nama_artikel;
        $kategoriartikels->slug =str_slug($request->nama_artikel, '-');
        $kategoriartikels->save();
        return redirect()->route('kategoriartikel.index');
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
        $kategoriartikels = Kategori_artikel::FIndOrFail($id);
        return view('kategoriartikel.edit', compact('kategoriartikels'));
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
            'nama_artikel' => 'required|max:255'
        ]);

        $kategoriartikels = Kategori_artikel::FindOrFail($id);
        $kategoriartikels->nama_artikel = $request->nama_artikel;
        $kategoriartikels->slug =str_slug($request->nama_artikel, '-');
        $kategoriartikels->save();
        return redirect()->route('kategoriartikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategoriartikels = Kategori_artikel::FindOrFail($id);
        $kategoriartikels->delete();
        return redirect()->route('kategoriartikel.index');
    }
}
