<?php

use Illuminate\Support\Facades\Route;

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
    return view('user.home');
});
Route::get('/almabanyAlsakania', function () {
    return view('user.almabanyAlsakania');
});
Route::get('/dafiAlmasrofat', function () {
    return view('user.dafiAlmasrofat');
});
Route::get('/ekhterMakanek', function () {
    return view('user.ekhterMakanek');
});
Route::get('/eltmas', function () {
    return view('user.eltmas');
});
Route::get('/ershadat', function () {
    return view('user.ershadat');
});
Route::get('/foroiUkhra', function () {
    return view('user.foroiUkhra');
});
Route::get('/gadwelAltaskin', function () {
    return view('user.gadwelAltaskin');
});
Route::get('/khatawatAlelthaq', function () {
    return view('user.khatawatAlelthaq');
});
Route::get('/mawaidAltaqdim', function () {
    return view('user.mawaidAltaqdim');
});
Route::get('/nategatAlqupole', function () {
    return view('user.nategatAlqupole');
});
Route::get('/natigatAltansik', function () {
    return view('user.natigatAltansik');
});
Route::get('/shakawyAndMoktarahat', function () {
    return view('user.shakawyAndMoktarahat');
});
Route::get('/shroutAltaqdim', function () {
    return view('user.shroutAltaqdim');
});

Route::get('/tasgilDkholAltalep', function () {
    return view('user.tasgilDkholAltalep');
});
Route::get('/takdimTalapAlelthak','user\takdimTalapAlelthakController@index' );
Route::post('/takdimTalapAlelthak','user\takdimTalapAlelthakController@store' );

Auth::routes();
Route::group(['prefix'=>'admin','namespace'=>'Admin'] ,function(){
    Route::get('/', 'AdminController@index');
    Route::resource('/users', 'usersController');

});
// Route::get('/home', 'HomeController@index')->name('home');
