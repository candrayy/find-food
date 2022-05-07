<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FindFoodController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\RasaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */


// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'postlogin'])->name('post-login');


// Register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('post-register');


// Find Food
Route::get('/find-food', [FindFoodController::class, 'index'])->name('find-food');
Route::get('/hasil', [HasilController::class, 'hasil'])->name('hasil');
Route::get('/result', [HasilController::class, 'store'])->name('result');








Route::group(['middleware' => ['auth']], function () {
    
    // Admin
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    
    
    // Kriteria
    Route::get('/kriteria', [KriteriaController::class, 'index'])->name('kriteria');
    Route::get('/tambah-kriteria', [KriteriaController::class, 'create'])->name('tambah-kriteria');
    Route::post('/simpan-kriteria', [KriteriaController::class, 'store'])->name('simpan-kriteria');
    Route::get('/edit-kriteria/{id}', [KriteriaController::class, 'edit'])->name('edit-kriteria');
    Route::post('/update-kriteria/{id}', [KriteriaController::class, 'update'])->name('update-kriteria');
    Route::get('/hapus-kriteria/{id}', [KriteriaController::class, 'destroy'])->name('hapus-kriteria');
    
    
    // Makanan
    Route::get('/makanan', [MakananController::class, 'index'])->name('makanan');
    Route::get('/tambah-makanan', [MakananController::class, 'create'])->name('tambah-makanan');
    Route::post('/simpan-makanan', [MakananController::class, 'store'])->name('simpan-makanan');
    Route::get('/edit-makanan/{id}', [MakananController::class, 'edit'])->name('edit-makanan');
    Route::post('/update-makanan/{id}', [MakananController::class, 'update'])->name('update-makanan');
    Route::get('/hapus-makanan/{id}', [MakananController::class, 'destroy'])->name('hapus-makanan');
    
    
    // Rasa
    Route::get('/rasa', [RasaController::class, 'index'])->name('rasa');
    Route::get('/tambah-rasa', [RasaController::class, 'create'])->name('tambah-rasa');
    Route::post('/simpan-rasa', [RasaController::class, 'store'])->name('simpan-rasa');
    Route::get('/edit-rasa/{id}', [RasaController::class, 'edit'])->name('edit-rasa');
    Route::post('/update-rasa/{id}', [RasaController::class, 'update'])->name('update-rasa');
    Route::get('/hapus-rasa/{id}', [RasaController::class, 'destroy'])->name('hapus-rasa');

});