<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Eskul;
use App\Galeri;
use App\Jabatan;
use App\Guru;
use App\Fasilitas;
use App\Kategori_artikel;
use App\Kategori_fasilitas;
use App\Kategori_galeri;
use App\Staf;


class FrontendController extends Controller
{
    public function beranda(){
		$artikels = Artikel::all();
		$eskuls = Eskul::all();
        $fasilitass = Fasilitas::all();
		$galeris = Galeri::all();
		$gurus = Guru::all();
        $jabatans = Jabatan::all();
        $stafs = Staf::all();
		return view('endlight', compact('artikels','eskuls','fasilitass','galeris','gurus','jabatans','stafs'));
	}
    public function artikel()
    {
        $kategoriartikels = Kategori_artikel::all();
        $artikels = Artikel::paginate(3);
        return view ('frontend.artikel', compact('kategoriartikels','artikels'));
    }
  
    public function  single(Artikel $artikels)
    {


        return view('frontend.artikelsingle', compact('artikels'));
    }

    public function galeri()
    {
        $galeris = Galeri::all();
        $kategorigaleris = Kategori_galeri::all();
        return view ('frontend.galeri', compact('galeris','kategorigaleris'));
    }
    public function eskul()
    {
        $eskuls = Eskul::all();
        return view ('frontend.eskul', compact('eskuls'));
    }
    public function kurikulum()
    {
        $gurus = Guru::all();
        $stafs = Staf::all();
        return view ('frontend.kurikulum', compact('gurus','stafs'));
    }
    public function gurus()
    {
        $gurus = Guru::all();
        return view ('frontend.gurus', compact('gurus'));
    }
    public function stafs()
    {
        
        $stafs = Staf::all();
        return view ('frontend.staf', compact('stafs'));
    }
    public function fasilitas()
    {
        $fasilitass = Fasilitas::all();
        $kategorifasilitass = Kategori_fasilitas::all();
        return view ('frontend.fasilitas', compact('fasilitass','kategorifasilitass'));
    }
    public function about()
    {
        return view ('frontend.about');
    }

    public function filter_artikels($id)
    {
        $artikels = Artikel::where('id_kategoriartikel','=',$id)->paginate(6);
        $kategoriartikels = Kategori_artikel::all();
        return view('frontend.artikel', compact('artikels','kategoriartikels'));
    }
    public function filter_galeris($id)
    {
        $galeris = Galeri::where('id_kategorigaleri','=',$id)->paginate(6);
        $kategorigaleris = Kategori_galeri::all();
        return view('frontend.galeri', compact('galeris','kategorigaleris'));
    }
    public function filter_fasilitass($id)
    {
        $fasilitass = Fasilitas::where('id_kategorifasilitas','=',$id)->paginate(6);
        $kategorifasilitass = Kategori_fasilitas::all();
        return view('frontend.fasilitas', compact('fasilitass','kategorifasilitass'));
    }
}

