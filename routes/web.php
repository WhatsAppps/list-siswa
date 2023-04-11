<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;

use App\Http\Controllers\SiswaController;

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

Route::get('/', [SiswaController::class, 'index'])->name('siswa.index');

Route::get('siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::get('siswa/{id}/show', [SiswaController::class, 'show'])->name('siswa.show');
Route::put('siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

