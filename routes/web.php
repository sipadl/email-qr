<?php

use Illuminate\Support\Facades\Route;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
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
    return view('auth.login');
})->name('halaman.login');

// Auth::routes();

Route::post("login",[App\Http\Controllers\MainController::class, 'login'])->name('login');
Route::get('logout', [App\Http\Controllers\MainController::class, 'logout'])->name('logout');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/main', [App\Http\Controllers\MainController::class, 'index'])->name('main');
Route::get('/dokumen', [App\Http\Controllers\MainController::class, 'document'])->name('dokumen');
Route::post('/transaksi', [App\Http\Controllers\MainController::class, 'createTransaksi'])->name('create.transaksi');
Route::get('/transaksi/{id}', [App\Http\Controllers\MainController::class, 'getTransaksiById'])->name('get.transaksi');
Route::get('/nota', [App\Http\Controllers\MainController::class, 'SendNota'])->name('nota');
Route::get('laporan', [App\Http\Controllers\MainController::class, 'laporan'])->name('laporan');
Route::get('/nota', [App\Http\Controllers\MainController::class, 'SendQr'])->name('qr');
Route::get('/test', [App\Http\Controllers\MainController::class, 'test'])->name('test');

Route::get('dokumen/{id}', [App\Http\Controllers\MainController::class, 'getDokumenById'])->name('get.dokumen');

// Post
Route::post('/create-dokumen', [App\Http\Controllers\MainController::class, 'createDokument'])->name('create.dokumen');
Route::post('/cetak-laporan', [App\Http\Controllers\MainController::class, 'reports'])->name('cetak.laporan');
Route::post('upload-akta', [App\Http\Controllers\MainController::class, 'uploadAkta'])->name('upload.akta');

Route::get('generate/pdf', [App\Http\Controllers\MainController::class, 'generatePdf'])->name('generate.pdf');

Route::get('setting', [App\Http\Controllers\MainController::class, 'setting'])->name('setting');
Route::post('setting/{id}', [App\Http\Controllers\MainController::class, 'ubahSetting'])->name('setting.post');
