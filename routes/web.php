<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/', [App\Http\Controllers\WisataController::class, 'index'])->name('wisata');
Route::get('/{id}/detail', [App\Http\Controllers\WisataController::class, 'detail'])->name('wisata');
Route::get('/informasi', [App\Http\Controllers\InformasiController::class, 'index'])->name('wisata');
Route::get('/galeri', [App\Http\Controllers\GaleriController::class, 'index'])->name('wisata');
Route::get('/about', function () {
    return view('pages.about');
})->name('wisata');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
