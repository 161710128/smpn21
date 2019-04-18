<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staf extends Model
{
    protected $table = 'stafs';
    protected $fillable = ['nama_staf','gambar'];
    public $timestamps = true;

    public function Jabatan(){
        return $this->BelongsTo('App\Jabatan','id_jabatan');
    }
}
