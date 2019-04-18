<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alert;
class Kategori_artikel extends Model
{
    protected $table  = 'kategori_artikels';
    protected $fillable = ['nama_artikel'];
    public $timestamps = true;

    public function Artikel(){
        return $this->HasMany('App\Artikel','id_kategoriartikel');
    }
    // $Kategori_artikel
    public static function boot()
	{
		parent::boot();
		self::deleting(function($kategoriartikels) {
		// mengecek apakah penulis masih punya buku
		if ($kategoriartikels->Artikel->count() > 0) {
		// menyiapkan pesan error
		$html = 'Category can not be deleted because it still has post : ';
		$html .= '<ul>';
		foreach ($kategoriartikels->Artikel as $artikels) {
		$html .= "<li>$artikels->title</li>";
		}
		$html .= '</ul>';
		Alert::error('masih ada data artikel','tidak dapat di hapus')->autoclose(1500);
		// membatalkan proses penghapusan
		return false;
		}
		});
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
