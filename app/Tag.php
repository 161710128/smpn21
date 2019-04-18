<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['nama', 'slug'];
    public $timestamps = true;

    public function Artikel()
    {
        return $this->belongsToMany('App\Artikel');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
