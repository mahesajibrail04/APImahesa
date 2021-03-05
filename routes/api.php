<?php


use App\models\artikel;
use App\models\kategoriartikel;
use App\models\berita;
use App\models\kategoriberita;
use App\models\galeri;
use App\models\kategorigaleri;
use App\models\pengumuman;
use App\models\kategoripengumuman;

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
route::apiResource( 'artikel', App\Http\Controllers\artikelAPIController::class );
route::apiResource( 'kategoriartikel', App\Http\Controllers\kategoriartikelAPIController::class );
route::apiResource( 'berita', App\Http\Controllers\beritaAPIController::class );
route::apiResource( 'kategoriberita', App\Http\Controllers\kategoriberitaAPIController::class );
route::apiResource( 'galeri', App\Http\Controllers\galeriAPIController::class );
route::apiResource( 'kategorigaleri', App\Http\Controllers\kategorigaleriAPIController::class );
route::apiResource( 'pengumuman', App\Http\Controllers\pengumumanAPIController::class );
route::apiResource( 'kategoripengumuman', App\Http\Controllers\kategoripengumumanAPIController::class );

route::middleware('auth:api')->get('user', function (Request $request) {
    return $request->user();
});

//Soal 1
//Tampilkan artikel dengan id=17 dan users_id=160
Route::get('soal1','App\Http\Controllers\BabSatuController@a1');

//Soal 2
//Tampilkan artikel dengan id=2 atau id=5
 Route::get('soal2','App\Http\Controllers\BabSatuController@a2');

// //Soal 3
// //Tampilkan artikel dengan id=3 dan user dengan nama  =Aslijan Megantara
 Route::get('soal3','App\Http\Controllers\BabSatuController@a3');

// //Soal 4
// //Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dengan galeri id=269
 Route::get('soal4','App\Http\Controllers\BabSatuController@a4');

// //Soal 5
// //Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dengan kategori galeri yang di awali dengan Aut
 Route::get('soal5','App\Http\Controllers\BabDuaController@a5');

// //Soal 6
// //Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dan juga galeri
 Route::get('soal6','App\Http\Controllers\BabDuaController@a6');

// //Soal 7
// //Tampilkan pengumuman yang dibuat oleh user yang membuat dua berita atau lebih
// Route::delete('soal7','BabDuaController@a7');


