<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alert;
class Kategori_fasilitas extends Model
{
    protected $table  = 'kategori_fasilitas';
    protected $fillable = ['nama_kategori'];
    public $timestamps = true;

    public function Fasilitas(){
        return $this->HasMany('App\Fasilitas','id_kategorifasilitas');
    }
    // $Kategori_fasilitas
    public static function boot()
	{
		parent::boot();
		self::deleting(function($kategorifasilitass) {
		// mengecek apakah penulis masih punya buku
		if ($kategorifasilitass->Fasilitas->count() > 0) {
		// menyiapkan pesan error
		$html = 'Category can not be deleted because it still has post : ';
		$html .= '<ul>';
		foreach ($kategorifasilitass->Fasilitas as $fasilitass) {
		$html .= "<li>$fasilitass->title</li>";
		}
		$html .= '</ul>';
		Alert::error('masih ada data fasilitas','tidak dapat di hapus')->autoclose(1500);
		// membatalkan proses penghapusan
		return false;
		}
		});
    }
    
}
