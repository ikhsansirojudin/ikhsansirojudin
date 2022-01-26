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

Route::get('/biodata', function () {
    $data=[
        'nama'=>'Ikhsan Sirojudin',
        'lahir'=>'Bandung, 11 Mei 2004',
        'hobi'=>'Futsal',
        'jk'=>'Laki-laki',
        'agama'=>'Islam',
        'alamat'=>'Jl. Jati Pasirbiru',
        'telp'=>'088223670046',
        'email'=>'ikhsansirojudin5@gmail.com',
        'photo'=>'../img/ikhsan.jpeg',



    ];
    return view('/biodata',$data);
});
Route::get('desk', function () {
    $data=[
        'judul'=>'Deskripsi',
        'penulis'=>'Ikhsan Sirojudin',
        'isi'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis a consequuntur cum mollitia quo unde aperiam suscipit sequi minima inventore. Fugiat nobis commodi reiciendis excepturi! '
    ];
    return view('desk',$data);
});
