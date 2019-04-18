<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staf;
use App\Jabatan;
use File;

class StafController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stafs = Staf::with('Jabatan')->get();
        return view('staf.index', compact('stafs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatans = Jabatan::all();
        return view('staf.create', compact('jabatans'));
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
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_staf'=>'required|max:255|unique:stafs'
        ]);

        $stafs = new Staf;
        $stafs->id_jabatan = $request->id_jabatan;
        $stafs->nama_staf = $request->nama_staf;
        $stafs->gambar = $request->gambar;

        if ($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $destinationPatch = public_path().'/assets/img/gambar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces = $file->move($destinationPatch, $filename);
            $stafs->gambar = $filename;
        }
        $stafs->save();
        return redirect()->route('staf.index');
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
        $stafs = Staf::findOrFail($id);
        $jabatans = Jabatan::all();
        $selectjabatans = Staf::findOrFail($id)->id_jabatan;
        return view('staf.edit', compact('stafs','jabatans','selectjabatans'));
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
            'nama_staf'=>'required|max:255'
        ]);

        $stafs = Staf::FindOrFail($id);
        $stafs->id_jabatan = $request->id_jabatan;
        $stafs->nama_staf = $request->nama_staf;


        if ($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $destinationPatch = public_path().'/assets/img/gambar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces = $file->move($destinationPatch, $filename);

            if ($stafs->gambar) { 
                $old_gambar = $stafs->gambar;
                $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/gambar/'
                . DIRECTORY_SEPARATOR . $stafs->gambar;
                    try {
                    File::delete($filepath);
                    } catch (FileNotFoundException $e) {
                // File sudah dihapus/tidak ada
                    }    
                }
                $stafs->gambar = $filename;
            }
                $stafs->save();
                return redirect()->route('staf.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stafs = Staf::FindOrFail($id);
        if ($stafs->gambar) {
            $old_foto = $stafs->gambar;
            $filepath = public_path(). DIRECTORY_SEPARATOR . 'assets/img/gambar/' . DIRECTORY_SEPARATOR . $stafs->gambar;
            try{
                File::delete($filepath);
            } catch (FileNotFoundException $e){
                // file sudah dihapus
            }
        }
    $stafs->delete();
    return redirect()->route('staf.index');
    }
}
