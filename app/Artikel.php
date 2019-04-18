<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
    

class Artikel extends Model
{
    protected $table = 'artikels';
    protected $fillable = ['judul','deskripsi','gambar'];
    protected $guard = ['tag'];
    
    public $timestemps = true;

    public function Kategoriartikel()
    {
        return $this->belongsTo('App\Kategori_artikel','id_kategoriartikel');
    }

    public function Tag()
    {
        return $this->belongsToMany('App\Tag');
    }
    

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
