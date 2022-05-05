<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PICController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PembicaraController;
use App\Http\Controllers\DokumentasiController;
use App\Models\Event;

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

Route::get('/login',[ LoginController::class, 'index'])->name('login.index')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate')->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/register',[ RegisterController::class, 'index'])->name('register.index')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store')->middleware('guest');


Route::resource('/admin/mahasiswa', MahasiswaController::class)->except(['show']);
Route::resource('/admin/proposal', ProposalController::class)->except(['show']);
Route::resource('/admin/pic', PICController::class)->except(['show']);
Route::resource('/admin/documentation', DokumentasiController::class)->except(['show']);
Route::resource('/admin/post', PostsController::class);
Route::resource('/admin/presensi', PresensiController::class)->only('index');
Route::resource('/admin/pembicara', PembicaraController::class)->except(['show']);
Route::resource('/admin/event', EventController::class)->except(['show']);

Route::post('/admin/event/pembicara', [EventController::class, 'storePembicara'])->name('event.storePembicara');
Route::get('/admin/event/pembicara/{id}', [EventController::class, 'editPembicara'])->name('event.editPembicara');
Route::delete('/admin/event/{id_event}/pembicara/{id_pembicara}', [EventController::class, 'destroyPembicara'])->name('event.destroyPembicara');

Route::get('/admin/event/laporanakhir/{id}', [EventController::class, 'editLaporanAkhir'])->name('event.editLaporanAkhir');
Route::put('/admin/event/laporanakhir/{id}', [EventController::class, 'updateLaporanAkhir'])->name('event.updateLaporanAkhir');

//Download Images
Route::get('/downloadfoto/{image}', [DownloadController::class, 'photoDokumentasi'])->name('download.photoDokumentasi');
Route::get('/downloadpdf/{image}', [DownloadController::class, 'pdfDokumentasi'])->name('download.pdfDokumentasi');
Route::get('/downloadbackground/{image}', [DownloadController::class, 'photoBackground'])->name('download.photoBackground');
Route::get('/downloadflyer/{image}', [DownloadController::class, 'photoFlyer'])->name('download.photoFlyer');
Route::get('/downloadlaporanakhir/{image}', [DownloadController::class, 'pdfLaporanAkhir'])->name('download.pdfLaporanAkhir');
Route::get('/downloadpembicara/{image}', [DownloadController::class, 'photoPembicara'])->name('download.photoPembicara');
Route::get('/downloadcv/{image}', [DownloadController::class, 'pdfCV'])->name('download.pdfCV');
Route::get('/downloadsertifikat/{image}', [DownloadController::class, 'photoSertifikat'])->name('download.photoSertifikat');
Route::get('/downloadproposal/{image}', [DownloadController::class, 'pdfProposal'])->name('download.pdfProposal');

