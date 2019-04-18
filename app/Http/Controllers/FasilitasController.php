<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori_fasilitas;
use App\Fasilitas;
use File;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitass = Fasilitas::with('Kategorifasilitas')->get();
        return view('fasilitas.index', compact('fasilitass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategorifasilitass = Kategori_fasilitas::all();
         return view('fasilitas.create', compact('kategorifasilitass'));
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
            'id_kategorifasilitas' => 'required|max:255',
            'nama_fasilitas'=>'required|max:255',
            'deskripsi'=>'required|max:2000',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $fasilitass = new Fasilitas;
        $fasilitass->id_kategorifasilitas = $request->id_kategorifasilitas;
        $fasilitass->nama_fasilitas = $request->nama_fasilitas;
        $fasilitass->deskripsi = $request->deskripsi;
        $fasilitass->gambar = $request->gambar;

        if ($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $destinationPatch = public_path().'/assets/img/gambar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces = $file->move($destinationPatch, $filename);
            $fasilitass->gambar = $filename;
        }
        $fasilitass->save();
        return redirect()->route('fasilitas.index');
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
        $fasilitass = Fasilitas::FindOrFail($id);
        $kategorifasilitass = Kategori_fasilitas::all();
        $selectkategorifasilitass = Fasilitas::FindOrFail($id)->id_kategorifasilitas;
        return view('fasilitas.edit',compact('fasilitass','kategorifasilitass','selectkategorifasilitass'));
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
            'id_kategorifasilitas' => 'required|max:255',
            'nama_fasilitas'=>'required|max:255',
            'deskripsi'=>'required|max:2000',
            'gambar' => ''
        ]);

        $fasilitass = Fasilitas::findOrFail($id);
        $fasilitass->id_kategorifasilitas = $request->id_kategorifasilitas;
        $fasilitass->nama_fasilitas = $request->nama_fasilitas;
        $fasilitass->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $destinationPatch = public_path().'/assets/img/gambar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces = $file->move($destinationPatch, $filename);

        if ($fasilitass->gambar) { 
        $old_gambar = $fasilitass->gambar;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/gambar/'
        . DIRECTORY_SEPARATOR . $fasilitass->gambar;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }    
        }
        $fasilitass->gambar = $filename;
    }
        $fasilitass->save();
        return redirect()->route('fasilitas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $fasilitass = Fasilitas::findOrFail($id);
        if ($fasilitass->gambar) {
            $old_foto = $fasilitass->gambar;
            $filepath = public_path(). DIRECTORY_SEPARATOR . 'assets/img/gambar/' . DIRECTORY_SEPARATOR . $fasilitass->gambar;
            try{
                File::delete($filepath);
            } catch (FileNotFoundException $e){
                // file sudah dihapus
            }
        }
        $fasilitass->delete();
        return redirect()->route('fasilitas.index');
    }
}
