<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/perkenalan', function () {

    return '<h1>Halo! Nama saya Fauzan Hakiki</h1>

            <p>NIM: 4124032 | Prodi: Sistem Informasi</p>

            <p>Saya siap belajar Laravel! 🚀</p>';

});
Route::get('/fauzan-fix', function () { return 'Sudah Berhasil'; });
