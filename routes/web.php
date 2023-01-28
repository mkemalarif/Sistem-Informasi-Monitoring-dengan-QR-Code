<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\RekapitulasiController;
use App\Http\Controllers\StatusCucianController;
use App\Http\Controllers\TambahTransaksiController;
use app\Models\User;
use app\Models\StatusCucian;

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
    return view('home', [
        "title" => "Homepage"
    ]);
});

// monitoring cucian
Route::get('/statusCucian', [StatusCucianController::class, "index"]);
Route::get('/statusCucian/cari', [StatusCucianController::class, "cari"]);


Route::get('/daftarHarga', function () {
    return view('daftarHarga', [
        "title" => "Daftar Harga"
    ]);
});
Route::get('/lokasi', function () {
    return view('lokasi', [
        "title" => "Halaman Lokasi"
    ]);
});
Route::get('/faq', function () {
    return view('faq', [
        "title" => "Frequently Asked Question"
    ]);
});


// all admin auth

// login page
Route::get('/login', [LoginController::class, "index"])->middleware("guest");
Route::post('/login', [LoginController::class, "authenticate"])->name('login');
Route::get('/logout', [LoginController::class, "logout"]);

// crud dashboard dengan controller resource
Route::resource('/dashboard', DashboardController::class)->middleware("auth");

// cek rekap data dan hasil transaksi perhari
Route::get('/rekapData', [RekapitulasiController::class, "index"])->middleware("auth");

// Print page
Route::get("/print/{noTransaksi}", [PrintController::class, "show"])->middleware("auth");

// Route::get("/dash", function () {
//     return view('dashboard.layout.main', [
//         "title" => "Halaman Dashboard",
//         "pageInformation" => "Dashboard"
//     ]);
// })->middleware("auth");
