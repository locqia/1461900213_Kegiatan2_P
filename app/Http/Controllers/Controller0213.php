<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class Controller0213 extends Controller

{
    public function buku(){
        $buku = DB::table('buku')
        ->get();
        return view('buku0213',['buku' => $buku]);
    }
    public function kategori(){
        $kategoribuku = DB::table('buku')
        ->leftJoin('kategori', 'buku.kategori_id', '=', 'kategori.kategori_id')
        ->get();

    	return view('kategori0213',['buku' => $kategoribuku]);
    }
    public function anggotasurabaya(){
        $anggotasurabaya = DB::table('anggota')
        ->where('anggota_alamat', 'LIKE', "%Surabaya%")
        ->get();

    	return view('anggotasurabaya0213',['buku' => $anggotasurabaya]);
    }
}
