<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('endlight');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function () {
    Route::resource('eskul','EskulController');
    Route::resource('galeri','GaleriController');
    Route::resource('kategorigaleri','KategorigaleriController');
    Route::resource('artikel','ArtikelController');
    Route::resource('kategoriartikel','KategoriartikelController');
    Route::resource('jabatan','JabatanController');
    Route::resource('guru','GuruController');
    Route::resource('staf','StafController');
    Route::resource('kategorifasilitas','KategorifasilitasController');
    Route::resource('tag','TagController');
    Route::resource('fasilitas','FasilitasController');
});


Route::get('/artikel','FrontendController@artikel')->name('artikel');
Route::get('/single/{artikels}','FrontendController@single')->name('single');
Route::get('/galeri','FrontendController@galeri')->name('galeri');
Route::get('/eskul','FrontendController@eskul')->name('eskul');
Route::get('/kurikulum','FrontendController@kurikulum')->name('kurikulum');
Route::get('/beranda','FrontendController@beranda')->name('beranda');
Route::get('/fasilitas','FrontendController@fasilitas')->name('fasilitas');
Route::get('/about','FrontendController@about')->name('about');
Route::get('/artikelsingle/{id}','FrontendController@artikelsingle')->name('artikelsingle');
Route::get('/artikel/{artikels}', 'FrontendController@filter_artikels')->name('filter_artikels');
Route::get('/galeri/{id}', 'FrontendController@filter_galeris')->name('filter_galeris');
Route::get('/fasilitas/{id}', 'FrontendController@filter_fasilitass')->name('filter_fasilitass');
Route::get('/gurus','FrontendController@gurus')->name('gurus');
Route::get('/staf','FrontendController@stafs')->name('stafs');