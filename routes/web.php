<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\RekamMedisController;

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
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/formulir', function () {
    return view('formulir');
})->middleware(['auth'])->name('formulir');

Route::get('/formulir', [FormulirController::class, 'index'])->middleware(['auth'])->name('formulir');
Route::post('/submit', [FormulirController::class, 'submit']);

Route::get('/rekam-medis', [RekamMedisController::class, 'index'])->middleware(['auth'])->name('rekam-medis');

Route::get('/pasien', function () {
    return view('pasien');
})->middleware(['auth'])->name('pasien');

Route::get('/dokter', function () {
    return view('dokter');
})->middleware(['auth'])->name('dokter');

require __DIR__.'/auth.php';
