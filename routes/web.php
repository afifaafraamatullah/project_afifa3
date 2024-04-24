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
    return view('welcome');
});

Route::get('/about', function () {
$nama = "afifa";
    $jenis_kelamin = "perempuan";
    $pendidikan_terakhir = "s2";
    $pekerjaan = "programer";
    $alamat = "sampora wehh";
    return view('data_diri', 
    compact('nama','jenis_kelamin','pendidikan_terakhir','pekerjaan','alamat'));
});

Route::get('/ni tsuite', function () {
    return view('welcome');
});

// parameter
Route::get('/about2/{nama}/{jenis_kelamin}/{pendidikan_terakhir}/{pekerjaan}/{alamat}', function (Request $request,$nama,$jenis_kelamin,$pendidikan_terakhir,$pekerjaan,$alamat) {
    $nama2 = $nama;
    $jenis_kelamin2 = $jenis_kelamin; 
    $pendidikan_terakhir2 = $pendidikan_terakhir; 
    $pekerjaan2 = $pekerjaan;
    $alamat2 = $alamat;
    return view('biodata',compact('nama2','jenis_kelamin2','pendidikan_terakhir2','pekerjaan2','alamat2'));
});