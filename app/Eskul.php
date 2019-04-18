<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    protected $table = 'eskuls';
    protected $fillable = ['judul','gambar','deskripsi'];
    public $timestamps = true;
}
