<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use App\Kategori_galeri;

class KategorigaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategorigaleris = Kategori_galeri::all();
        return view('kategorigaleri.index', compact('kategorigaleris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategorigaleri.create');
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
            'nama_galeri' => 'required|max:255|unique:kategori_galeris'
        ]);

        $kategorigaleris = new Kategori_galeri;
        $kategorigaleris->nama_galeri = $request->nama_galeri;
        $kategorigaleris->save();
        return redirect()->route('kategorigaleri.index');
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
        $kategorigaleris = Kategori_galeri::FIndOrFail($id);
        return view('kategorigaleri.edit', compact('kategorigaleris'));
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
            'nama_galeri' => 'required|max:255'
        ]);

        $kategorigaleris = Kategori_galeri::FindOrFail($id);
        $kategorigaleris->nama_galeri = $request->nama_galeri;
        $kategorigaleris->save();
        return redirect()->route('kategorigaleri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategorigaleris = Kategori_galeri::FindOrFail($id);
        $kategorigaleris->delete();
        return redirect()->route('kategorigaleri.index');
    }
}
