<?php

use App\Http\Controllers\RiwayatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Models\Peminjaman;

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

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
Route::get('/petugas',[PetugasController::class, 'index'])->name('petugas.index');
Route::get('/buku',[BukuController::class, 'index'])->name('buku.index');
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::get('/riwayat',[RiwayatController::class,'index'])->name('riwayat.index');
Route::get('/genre',[GenreController::class,'index'])->name('genre.index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/buku/{id}', [BukuController::class, 'show'])->name('buku.show');
Route::resource('/users', UserController::class);
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');


    Route::middleware(['auth'])->group(function () {
        Route::middleware(['auth'])->group(function () {
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        });        
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

});


Route::get('/home', function () {return redirect('/');})->name('home');


Route::get('/', [HomeController::class, 'index'])->name('home');
