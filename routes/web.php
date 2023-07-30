<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KnjigeController;
use App\Http\Controllers\AutoriController;
use App\Http\Controllers\BibliotekariController;
use App\Http\Controllers\ClanoviController;
use App\Http\Controllers\IzdavanjeKnjigaController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\RecycleBinController;

use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::resource('/knjige', KnjigeController::class);
Route::resource('/autori', AutoriController::class);
Route::resource('/izdavanje-knjiga', IzdavanjeKnjigaController::class);
Route::resource('/bibliotekari', BibliotekariController::class);
Route::resource('/clanovi', ClanoviController::class);
Route::resource('/podesavanja', SettingsController::class);
Route::get('/recycle-bin', [RecycleBinController::class, 'index'])->name('recycle-bin.index');
Route::any('/recycle-bin/delete/{id}', [RecycleBinController::class, 'delete'])->name('recycle-bin.delete');
Route::any('/recycle-bin/restore/{id}', [RecycleBinController::class, 'restore'])->name('recycle-bin.restore');

