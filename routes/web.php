<?php


use App\Models\Company;

use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\BookRentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RentLogsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengembalianController;

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


Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');


//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

//LOGOUT
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//KATEGORI 
Route::resource('kategories', KategoriController::class);


 

//COMPANIES BUKU DAFTAR
Route::resource('companies', CompanyController::class);


//GENERATE BUKU
/* Route::get('generate.laporan', [PengembalianController::class, 'index']);
Route::get('generatepdf', [PengembalianController::class, 'generatepdf'])->name('pengembalian.pdf'); */

//GENERATE KATEGORI
Route::get('category', [CategoryController::class, 'index']);
Route::get('generatepdf', [CategoryController::class, 'generatepdf'])->name('category.pdf');

//GENERATE pinjam
Route::get('pinjam', [PinjamController::class, 'index']);
Route::get('generatepdf', [PinjamController::class, 'generatepdf'])->name('pinjam.pdf');

Route::get('/hapus/{id}', [KategoriController::class, 'destroy'])->name('destroy')->middleware('auth');


Route::get('/ubah/{id}', [KategoriController::class, 'edit'])->name('edit')->middleware('auth');
Route::post('/update', [KategoriController::class, 'update'])->name('update')->middleware('auth');


Route::resource('transaksi', HomeController::class);


Route::get('book-rent', [BookRentController::class, 'index']);
Route::post('book-rent', [BookRentController::class, 'store']);

Route::get('rent-logs', [RentLogsController::class, 'index']);

Route::get('book-return', [BookRentController::class, 'returnBook']);
Route::post('book-return', [BookRentController::class, 'saveReturnBook']);