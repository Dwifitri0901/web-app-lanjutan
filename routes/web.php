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

Route::get('/nama', function() {
    return 'Nama Saya <b> Dwi Fitri Miliani</b>';
});


Route::get('/hobby', function () {
    return 'Hobby Dwifitry <b>Menulis</b>';
});


Route::get('/ttl', function () {
    return 'TTL <b>Samarinda 09012000</b>';
});


Route::get('/jurusan', function () {
        return 'Jurusan <b>S1 Teknik Informatika</b>';
});


Route::get('/alamat', function () {
    return 'Dwifitry berasal dari <b>kota Tenggarong Seberang</b>';
});

use App\Http\Controllers\DwifitryController;

Route::get("/dwifitry/one", [DwifitryController::class, "one"]);
Route::get("/dwifitry/two", [DwifitryController::class, "two"]);
Route::get("/dwifitry/three", [DwifitryController::class, "three"]);


use App\Http\Controllers\FitryController;

Route::get("/fitry/satu", [FitryController::class, "satu"]);
Route::get("/fitry/dua", [FitryController::class, "dua"]);
Route::get("/fitry/tiga", [FitryController::class, "tiga"]);

