<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller0213;
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
    return view('home0213');
});
Route::get('/buku', [Controller0213::class,'buku']);
Route::get('/kategori', [Controller0213::class,'kategori']);
Route::get('/anggota', [Controller0213::class,'anggotasurabaya']);