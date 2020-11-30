<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ArtikeluserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KomentarController;
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

Route::get('/template', function () {
    return view('template.base');
});

Route::get('beranda', [BerandaController::class, 'showBeranda']);
Route::get('template', [BerandaController::class, 'showTemplate']);
// Route::get('artikeluser', [BerandaController::class, 'showArtikel']);
Route::get('kontak', [BerandaController::class, 'showKontak']);

Route::get('artikeluser', [ArtikeluserController::class, 'showArtikel']);
Route::get('detail/{artikel}', [ArtikeluserController::class, 'show']);
Route::get('komentar/{komentar}', [ArtikeluserController::class, 'komentar']);

// Route::get('artikel', [ArtikelController::class, 'index']);
// Route::get('artikel/create', [ArtikelController::class, 'create']);
// Route::post('artikel', [ArtikelController::class, 'store']);
// Route::get('artikel/{artikel}', [ArtikelController::class, 'show']);
// Route::get('artikel/{artikel}/edit', [ArtikelController::class, 'edit']);
// Route::put('artikel/{artikel}', [ArtikelController::class, 'update']);
Route::resource('artikel', ArtikelController::class);
Route::resource('user', UserController::class);
Route::resource('komentar', KomentarController::class);

Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'loginprocess']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'showRegister']);
Route::post('register', [AuthController::class, 'storeRegister']);
