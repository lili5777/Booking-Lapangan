<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('admin', [AdminController::class, 'index'])->name('admin');

        // Operasional
        Route::get('/admin/operasional', [AdminController::class, 'operasional'])->name('admin_operasional');
        Route::post('proses_tambahoperasional', [AdminController::class, 'proses_tambah_operasional'])->name('proses_tambahoperasional');
        Route::get('edit_data_operasional/{id}', [AdminController::class, 'edit_operasional'])->name('proses_editoperasional');

        // pengguna
        Route::get('/admin/pengguna', [AdminController::class, 'pengguna'])->name('admin_pengguna');
        Route::get('/admin/tambahpengguna', [AdminController::class, 'tambah_pengguna'])->name('tambah_pengguna');
        Route::post('proses_tambahpengguna', [AdminController::class, 'proses_tambah_pengguna'])->name('proses_tambahpengguna');
        Route::get('edit_data_pengguna/{id}', [AdminController::class, 'edit_pengguna'])->name('proses_editpengguna');
        Route::delete('hapus_data_pengguna/{id}', [AdminController::class, 'hapus_pengguna'])->name('proses_hapuspengguna');

        // kategori
        Route::get('/admin/kategori', [AdminController::class, 'kategori'])->name('admin_kategori');
        Route::get('/admin/tambahkategori', [AdminController::class, 'tambah_kategori'])->name('tambah_kategori');
        Route::post('proses_tambahkategori', [AdminController::class, 'proses_tambah_kategori'])->name('proses_tambahkategori');
        Route::get('edit_data_kategori/{id}', [AdminController::class, 'edit_kategori'])->name('proses_editkategori');
        Route::delete('hapus_data_kategori/{id}', [AdminController::class, 'hapus_kategori'])->name('proses_hapuskategori');

        // lapangan
        Route::get('/admin/lapangan', [AdminController::class, 'lapangan'])->name('admin_lapangan');
        Route::get('/admin/tambahlapangan', [AdminController::class, 'tambah_lapangan'])->name('tambah_lapangan');
        Route::post('proses_tambahlapangan', [AdminController::class, 'proses_tambah_lapangan'])->name('proses_tambahlapangan');
        Route::get('edit_data_lapangan/{id}', [AdminController::class, 'edit_lapangan'])->name('proses_editlapangan');
        Route::delete('hapus_data_lapangan/{id}', [AdminController::class, 'hapus_lapangan'])->name('proses_hapuslapangan');


        // booking
        Route::get('/admin/booking', [AdminController::class, 'booking'])->name('admin_booking');
        Route::get('/admin/tambahbooking', [AdminController::class, 'tambah_booking'])->name('tambah_booking');
        Route::post('/admin/prosestambahbooking', [AdminController::class, 'proses_tambah_booking'])->name('proses_tambahbooking');
        Route::get('/admin/pilihjam/{user}/{lapangan}/{tgl}', [AdminController::class, 'pilihjam'])->name('admin_pilihjam');
        Route::post('/admin/simpanbooking', [AdminController::class, 'simpan_booking'])->name('simpan_booking');
        Route::delete('hapus_data_booking/{id}', [AdminController::class, 'hapus_booking'])->name('proses_hapusbooking');


        // konfirmasi
        Route::get('/admin/konfirmasi', [AdminController::class, 'konfirmasi'])->name('admin_konfirmasi');
        Route::get('/admin/tambahkonfirmasi', [AdminController::class, 'tambah_konfirmasi'])->name('tambah_konfirmasi');
        Route::post('proses_tambahkonfirmasi', [AdminController::class, 'proses_tambah_konfirmasi'])->name('proses_tambahkonfirmasi');
        Route::get('edit_data_konfirmasi/{id}', [AdminController::class, 'edit_konfirmasi'])->name('proses_editkonfirmasi');
        Route::delete('hapus_data_konfirmasi/{id}', [AdminController::class, 'hapus_konfirmasi'])->name('proses_hapuskonfirmasi');
        Route::post('proses_terimakonfirmasi/{id}', [AdminController::class, 'terima_konfirmasi'])->name('terimakonfirmasi');
        Route::post('proses_tolakkonfirmasi/{id}', [AdminController::class, 'tolak_konfirmasi'])->name('tolakkonfirmasi');
    });
});


Route::get('/', [UserController::class, 'index'])->name('user');
Route::get('/lapangan', [UserController::class, 'lapangan'])->name('lapangan');
Route::get('/kontak', [UserController::class, 'kontak'])->name('kontak');
Route::get('/riwayat', [UserController::class, 'riwayat'])->name('riwayat');
Route::post('/pemesanan/{id}', [UserController::class, 'pesan'])->name('pemesanan');
Route::post('/detailpesanan', [UserController::class, 'detailpesanan'])->name('detailpesanan');
Route::post('/prosesbooking', [UserController::class, 'simpanbooking'])->name('simpanbookingg');
Route::get('/konfirmasibukri/{id}', [UserController::class, 'konfir'])->name('konfirbukti');
Route::post('/konfirmasibukri', [UserController::class, 'prosesupload'])->name('prosesupload');
Route::get('/detail/{id}', [UserController::class, 'detail'])->name('detail');


// cetak
Route::get('/cetak-booking', [UserController::class, 'cetak'])->name('cetak_booking');
