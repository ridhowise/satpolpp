<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HalamanUtamaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\DetailsLayananController;
use App\Http\Controllers\ObjekWisataController;
use App\Http\Controllers\AuthController;

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
// Route::resource('posts', PostController::class);

// Route::get('/', function () {zzzzzzzzzzzzzzzzz
//     return view('welcome');
// });

Route::get('/', [HalamanUtamaController::class, 'index']);
Route::get('/dashboard', [HalamanUtamaController::class, 'dashboard'])->middleware('auth');
Route::get('logout', [AuthController::class, 'logout']);

// halaman Kategori
Route::get('kategori/{slug_kategori}', [HalamanUtamaController::class, 'index_layanan']);
Route::get('kategori/{slug_kategori}/{slug_detail}', [HalamanUtamaController::class, 'show_details_layanan']);

Route::get('dashboard/kategori', [LayananController::class, 'index']);
Route::get('dashboard/kategori/create', [LayananController::class, 'create']);
Route::post('dashboard/kategori', [LayananController::class, 'store']);
// Route::get('dashboard/kategori/{id}', [LayananController::class, 'show']);
Route::get('dashboard/kategori/{id}/edit', [LayananController::class, 'edit']);
Route::put('dashboard/kategori/{id}', [LayananController::class, 'update']);
Route::delete('dashboard/kategori/{id}', [LayananController::class, 'destroy']);

Route::get('dashboard/postingan', [DetailsLayananController::class, 'index']);
Route::get('dashboard/postingan/create', [DetailsLayananController::class, 'create']);
Route::post('dashboard/postingan', [DetailsLayananController::class, 'store']);
// Route::get('dashboard/postingan/{id}', [DetailsLayananController::class, 'show']);
Route::get('dashboard/postingan/{id}/edit', [DetailsLayananController::class, 'edit']);
Route::put('dashboard/postingan/{id}', [DetailsLayananController::class, 'update']);
Route::delete('dashboard/postingan/{id}', [DetailsLayananController::class, 'destroy']);







// Route::resource('layanan', LayananController::class)->middleware('auth');
// Route::resource('details-layanan', DetailsLayananController::class)->middleware('auth');
// Route::resource('objek-wisata', ObjekWisataController::class);

Auth::routes();
