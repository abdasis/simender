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
    Route::group(['prefix' => 'sim'], function(){
        Route::get('semua', Semua::class)->name('pengguna.semua');
        Route::get('tambah', Tambah::class)->name('pengguna.tambah');
        Route::get('sunting/{id}', Sunting::class)->name('pengguna.sunting');
    });

    Route::group(['prefix' => 'stnk'], function (){
        Route::get('tambah', \App\Http\Livewire\Stnk\Tambah::class)->name('stnk.tambah');
        Route::get('sunting/{id}', \App\Http\Livewire\Stnk\Sunting::class)->name('stnk.sunting');
        Route::get('semua', \App\Http\Livewire\Stnk\Semua::class)->name('stnk.semua');
    });

    Route::group(['prefix' => 'tilang'], function (){
        Route::get('tambah', \App\Http\Livewire\Tilang\Tambah::class)->name('tilang.tambah');
        Route::get('sunting/{id}', \App\Http\Livewire\Tilang\Sunting::class)->name('tilang.sunting');
        Route::get('semua', \App\Http\Livewire\Tilang\Semua::class)->name('tilang.semua');
    });

    Route::group(['prefix' => 'setting'], function(){
       Route::get('sistem', Sistem::class)->name('setting.sistem');
       Route::get('whatsapp', \App\Http\Livewire\Setting\Whatsapp::class)->name('setting.whatsapp');
    });

    Route::group(['prefix' => 'pesan'], function(){
        Route::get('stnk', \App\Http\Livewire\Pesan\NotifStnk::class)->name('pesan.stnk');
        Route::get('sim', \App\Http\Livewire\Pesan\NotifSim::class)->name('pesan.sim');
        Route::get('pajak', \App\Http\Livewire\Pesan\NotifPajak::class)->name('pesan.pajak');
    });

    Route::group(['prefix' => 'laporan', 'middleware' => 'auth'], function(){
        Route::get('pengiriman', \App\Http\Livewire\Laporan\Pengiriman::class)->name('laporan');
    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
