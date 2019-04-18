<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori_fasilitas;
use App\Fasilitas;


class KategorifasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategorifasilitass = Kategori_fasilitas::all();
        return view('kategorifasilitas.index', compact('kategorifasilitass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategorifasilitas.create');
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
            'nama_kategorifasilitas' => 'required|max:255|unique:kategori_fasilitas'
        ]);

        $kategorifasilitass = new Kategori_fasilitas;
        $kategorifasilitass->nama_kategorifasilitas = $request->nama_kategorifasilitas;
        $kategorifasilitass->save();
        return redirect()->route('kategorifasilitas.index');
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
        $kategorifasilitass = Kategori_fasilitas::FIndOrFail($id);
        return view('kategorifasilitas.edit', compact('kategorifasilitass'));
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
            'nama_kategorifasilitas' => 'required|max:255'
        ]);

        $kategorifasilitass = Kategori_fasilitas::FindOrFail($id);
        $kategorifasilitass->nama_kategorifasilitas = $request->nama_kategorifasilitas;
        $kategorifasilitass->save();
        return redirect()->route('kategorifasilitas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategorifasilitass = Kategori_fasilitas::FindOrFail($id);
        $kategorifasilitass->delete();
        return redirect()->route('kategorifasilitas.index');
    }
}
