<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Datapenduduk;
use App\Http\Controllers\Berita;
use App\Http\Controllers\Dokumentasi;
use App\Http\Controllers\Tentangkami;


Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::get("/data/penduduk", [Datapenduduk::class, "data"])->name('data');
Route::get("/data/penduduk/add", [Datapenduduk::class, "add"])->name('add');
Route::post("/data/penduduk/procces", [Datapenduduk::class, "addProcess"])->name('process');
Route::get("/data/penduduk/edit/{id}", [Datapenduduk::class, "edit"])->name('edit');
Route::patch("data/penduduk/{id}", [Datapenduduk::class, "editProcess"])->name('editprocess');
Route::delete("data/penduduk/{id}", [Datapenduduk::class, "delete"])->name('delete');

Route::get("/data/berita", [Berita::class, "data"])->name('berita');
Route::get("/data/dokumentasi", [Dokumentasi::class, "data"])->name('dokumentasi');
Route::get("/data/tentangkami", [Tentangkami::class, "data"])->name('tentangkami');
