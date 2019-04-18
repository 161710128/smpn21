<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeris';
    protected $fillable = ['gambar','deskripsi'];

    public function Kategorigaleri(){
        return $this->belongsTo('App\Kategori_galeri','id_kategorigaleri');
    }
}
