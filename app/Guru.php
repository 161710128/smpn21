<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'gurus';
    protected $fillable = ['nama_guru','mata_pelajaran','gambar'];
    public $timestamps = true;

    public function Jabatan(){
        return $this->belongsTo('App\Jabatan','id_jabatan');
    }
}
