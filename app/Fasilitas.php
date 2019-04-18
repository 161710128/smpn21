<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $fillable = ['nama_fasilitas','deskripsi','gambar'];
    public $timestamps = true;

    public function Kategorifasilitas(){
        return $this->BelongsTo('App\Kategori_fasilitas','id_kategorifasilitas');
    }
   
}
