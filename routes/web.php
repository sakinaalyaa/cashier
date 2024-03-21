<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\karyawanController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProdukTitipanController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\TransaksiController;



Route::get('/', [HomeController::class, 'home']);
Route::resource('karyawan', karyawanController::class);
Route::resource('category', categoryController::class);
Route::resource('jenis', JenisController::class);
Route::resource('pemesanan', PemesananController::class);
Route::resource('menu', MenuController::class);
Route::resource('pelanggan', pelangganController::class);
Route::resource('stok', StokController::class);
Route::resource('transaksi', TransaksiController::class);
Route::resource('meja', MejaController::class);
Route::resource('produkTitipan', ProdukTitipanController::class);
Route::resource('produk', ProdukController::class);


Route::get('export/menu', [MenuController::class, 'exportData'])->name('tidak');
Route::get('export/karyawan', [KaryawanController::class, 'exportData'])->name('ya');
Route::get('export/produkTitipan', [ProdukTitipanController::class, 'exportData'])->name('kina');
Route::get('export/stok', [StokController::class, 'exportData'])->name('ci');
Route::get('export/jenis', [JenisController::class, 'exportData'])->name('ni');
Route::get('export/pelanggan', [pelangganController::class, 'exportData'])->name('lo');
Route::get('export/meja', [MejaController::class, 'exportData'])->name('su');
Route::get('export/category', [categoryController::class, 'exportData'])->name('ma');

Route::get('nota/{nofaktur}', [transaksiController::class, 'faktur']);
Route::get('generate/menu', [MenuController::class, 'generatepdf'])->name('hiu');
Route::get('generate/karyawan', [KaryawanController::class, 'generatepdf'])->name('paus');
Route::get('generate/produkTitipan', [ProdukTitipanController::class, 'sakina'])->name('kuy');
Route::get('generate/stok', [StokController::class, 'generatepdf'])->name('ca');
Route::get('generate/jenis', [JenisController::class, 'generatepdf'])->name('na');
Route::get('generate/pelanggan', [pelangganController::class, 'generatepdf'])->name('ve');
Route::get('generate/meja', [MejaController::class, 'generatepdf'])->name('si');
Route::get('generate/category', [categoryController::class, 'generatepdf'])->name('mi');

Route::post('menu/import', [MenuController::class, 'importData'])->name('import-menu');
Route::post('pelanggan/import', [pelangganController::class, 'importData'])->name('import-pelanggan');
