<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PICController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\DownloadController;

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

Route::resource('/admin/mahasiswa', MahasiswaController::class)->except(['show']);
Route::resource('/admin/proposal', ProposalController::class)->except(['show']);
Route::resource('/admin/pic', PICController::class)->except(['show']);
Route::resource('/admin/documentation', DokumentasiController::class)->except(['show']);
Route::resource('/admin/post', PostsController::class)->except(['show']);

//Download Images
Route::get('/downloadphoto', DownloadController::class, 'downloadPhoto')->name('downloadPhoto');
Route::get('/downloadpdf', DownloadController::class, 'downloadPdf')->name('downloadPDF');