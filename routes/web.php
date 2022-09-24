<?php

//User
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\SaranController;
use App\Http\Controllers\User\RtController;

// Admin
use App\Http\Controllers\Admin\DataController;
use App\Http\Controllers\Admin\RwController;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\InformasiController;

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//User
Route::get('/', [HomeController::class, 'index'])->name('User.home');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('User.galeri');
Route::get('/surat', [HomeController::class, 'surat'])->name('User.surat');
Route::get('/data', [RtController::class, 'data'])->name('User.data');
Route::get('/info', [RtController::class, 'info'])->name('User.info');

Route::get('/saran', [SaranController::class, 'create'])->name('User.infosaran.create');
Route::post('/saran', [SaranController::class, 'store'])->name('User.create.store');
Route::get('/detail', [SaranController::class, 'detail'])->name('User.infosaran.detail');
Route::get('/ubah/{saran}', [SaranController::class, 'ubah'])->name('User.infosaran.ubah');
Route::patch('/ubah/{saran}', [SaranController::class, 'update'])->name('User.infosaran.ubah.update');
Route::delete('/detail/{saran}', [SaranController::class, 'destroy'])->name('User.infosaran.detail.delete');


//Admin
Route::get('/dataa', [DataController::class, 'dataa'])->name('Admin.dataa');
Route::get('/rw', [RwController::class, 'rw'])->name('Admin.rw');
Route::post('/rw', [RwController::class, 'store'])->name('Admin.rw.store');
Route::get('/show', [RwController::class, 'show'])->name('Admin.show');
Route::get('/edit/{rw}', [RwController::class, 'edit'])->name('Admin.edit');
Route::patch('/edit/{rw}', [RwController::class, 'update'])->name('Admin.edit.update');
Route::delete('/show/{rw}', [RwController::class, 'destroy'])->name('Admin.show.delete');

Route::get('/info1', [InfoController::class, 'info1'])->name('Admin.info1');
Route::post('/info1', [InfoController::class, 'store'])->name('Admin.info1.store');
Route::get('/showinfo', [InfoController::class, 'showinfo'])->name('Admin.info.showinfo');
Route::get('/nampil', [InfoController::class, 'nampil'])->name('Admin.info.nampil');
Route::get('/edit1/info/{info}', [InfoController::class, 'edit1'])->name('Admin.info.edit1');
Route::patch('/edit1/info/{info}', [InfoController::class, 'update'])->name('Admin.info.edit1.update');
Route::delete('/showinfo/{info}', [InfoController::class, 'destroy'])->name('Admin.showinfo.delete');
