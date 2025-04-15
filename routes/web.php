<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\POSController;

Route::pattern('id', '[0-9]+'); // artinya ketika ada parameter {id}, maka harus berupa angka

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postlogin']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware(['auth'])->group(function () { // artinya semua route di dalam group ini harus login dulu
    // masukkan semua route yang perlu autentikasi di sini
});

// Route::get('/', [HomeController::class, 'index']);
Route::get('/', function (){
    return view('welcome');
});
Route::get('/level', [LevelController::class, 'index']);
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');

Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');


Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::post('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');

Route::delete('/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

Route::resource('m_user', POSController::class);

Route::get('/user', [UserController::class, 'index']);

Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::get('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);

Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);

Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

Route::get('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);

Route::middleware(['auth'])->group(function () { // artinya semua route di dalam group ini harus login dulu
    Route::get('/', [WelcomeController::class, 'index']);
    // route Level

    // artinya semua route di dalam group ini harus punya role ADM (Administrator)
    Route::middleware(['authorize:ADM'])->group(function () {
        Route::get('/level', [LevelController::class, 'index']);
        Route::post('/level/list', [LevelController::class, 'list']); // untuk untuk list json datatables
        Route::get('/level/create', [LevelController::class, 'create']);
        Route::post('/level/store', [LevelController::class, 'store']);
        Route::get('/level/{id}/edit', [LevelController::class, 'edit']); // untuk tampilkan form edit
        Route::put('/level/{id}', [LevelController::class, 'update']); // untuk proses update data
        Route::delete('/level/{id}', [LevelController::class, 'destroy']); // untuk proses hapus data
    });

    // route Kategori
});
// Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);
// Route::get('/sales', [SalesController::class, 'index']);
// Route::prefix('category')->group(function () {
//     Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
//     Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
//     Route::get('/home-care', [ProductController::class, 'homeCare']);
//     Route::get('/baby-kid', [ProductController::class, 'babyKid']);
// });