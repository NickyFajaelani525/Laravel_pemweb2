<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

//Route
Route::get('/', function () {
    return view('welcome');
});

/*
*method HTTP:
*1. Get : digunakan untuk menampilkan data/halaman.
*2. Post : digunakan untuk mengirim data (e.g: form data).
*3. Put / Patch : digunakan untuk mengupdate data.
*4. Delete : digunakan unuk menghapus data.
*/

//Dashboard Route
Route::get('admin/dashboard',[DashboardController::class, 'index']);
