<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alert;
class Jabatan extends Model
{
    protected $table = 'Jabatans';
    protected $fillable = ['nama_jabatan'];
    public $timestamps = true;

    public function Guru(){
        return $this->HasMany('App\Guru','id_jabatan');
    }
    public function Staf(){
        return $this->HasMany('App\Staf','id_staf');
    }
     // $Kategori_galeri
     public static function boot()
     {
         parent::boot();
         self::deleting(function($jabatans) {
         // mengecek apakah penulis masih punya buku
         if ($jabatans->Guru->count() > 0) {
         // menyiapkan pesan error
         $html = 'Category can not be deleted because it still has post : ';
         $html .= '<ul>';
         foreach ($jabatans->Guru as $gurus) {
         $html .= "<li>$gurus->title</li>";
         }
         $html .= '</ul>';
         Alert::error('masih ada data guru','tidak dapat di hapus')->autoclose(1500);
         // membatalkan proses penghapusan
         return false;
         }
         });
     }
     
}
