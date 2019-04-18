<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alert;
class Kategori_galeri extends Model
{
    
    protected $fillable = ['nama_galeri'];
    public $timestamps = true;

    public function Galeri(){
        return $this->HasMany('App\Galeri','id_kategorigaleri');
    }
    // $Kategori_galeri
    public static function boot()
	{
		parent::boot();
		self::deleting(function($kategorigaleris) {
		// mengecek apakah penulis masih punya buku
		if ($kategorigaleris->Galeri->count() > 0) {
		// menyiapkan pesan error
		$html = 'Category can not be deleted because it still has post : ';
		$html .= '<ul>';
		foreach ($kategorigaleris->Galeri as $galeriss) {
		$html .= "<li>$galeriss->title</li>";
		}
		$html .= '</ul>';
		Alert::error('masih ada data galeri','tidak dapat di hapus')->autoclose(1500);
		// membatalkan proses penghapusan
		return false;
		}
		});
    }
}
