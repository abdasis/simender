<?php

use App\Http\Livewire\Pengguna\Semua;
use App\Http\Livewire\Pengguna\Sunting;
use App\Http\Livewire\Pengguna\Tambah;
use App\Http\Livewire\Setting\Sistem;
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

Route::get('/', function () {
   return redirect()->route('login');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::group(['prefix' => 'pengguna'], function(){
        Route::get('data-sim', Semua::class)->name('pengguna.semua');
        Route::get('data-stnk', \App\Http\Livewire\Pengguna\SemuaStnk::class)->name('pengguna.stnk');
        Route::get('tambah', Tambah::class)->name('pengguna.tambah');
        Route::get('sunting/{id}', Sunting::class)->name('pengguna.sunting');
    });

    Route::group(['prefix' => 'setting'], function(){
       Route::get('sistem', Sistem::class)->name('setting.sistem');
       Route::get('whatsapp', \App\Http\Livewire\Setting\Whatsapp::class)->name('setting.whatsapp');
    });

    Route::group(['prefix' => 'laporan', 'middleware' => 'auth'], function(){
        Route::get('pengiriman', \App\Http\Livewire\Laporan\Pengiriman::class)->name('laporan');
    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
