<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//methode rute
// get (melihat) ,  post (mengirim data), put (update), delete (menghapus), #semuanya_pakai_form
// Route::get("LihatNama", [\App\Http\Controllers\BelajarController::class, 'Name']);
//untuk menampilkan data dari controller

//->name('tambah'); (pakai jika nama route sama)

Route::get('belajar', [\App\Http\Controllers\BelajarController::class, 'index']);
Route::get('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('login_action', [\App\Http\Controllers\LoginController::class, 'loginAction'])->name('login_action'); //index dari function login

Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);

//MATERI ARTIMATIKA
Route::get("tambah", [\App\Http\Controllers\BelajarController::class, 'tambah'])->name('tambah');
Route::get("kurang", [\App\Http\Controllers\BelajarController::class, 'kurang'])->name('kurang');
Route::get("kali", [\App\Http\Controllers\BelajarController::class, 'kali'])->name('kali');
Route::get("bagi", [\App\Http\Controllers\BelajarController::class, 'bagi'])->name('bagi');


Route::post('storeTambah', [\App\Http\Controllers\BelajarController::class, 'storeTambah'])->name('storeTambah');
Route::post('storeKurang', [\App\Http\Controllers\BelajarController::class, 'storeKurang'])->name('storeKurang');
Route::post('storeKali', [\App\Http\Controllers\BelajarController::class, 'storeKali'])->name('storeKali');
Route::post('storeBagi', [\App\Http\Controllers\BelajarController::class, 'storeBagi'])->name('storeBagi');
