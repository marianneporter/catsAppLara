<?php

use Illuminate\Support\Facades\Route;
use App\Models\Cat;
use App\Http\Controllers\CatController;
use App\Http\Controllers\AuthController;

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


Route::get('/', [ CatController::class, 'index'] );

Route::get('/cats/create', [CatController::class, 'create'])->name('cats.create');
Route::post('/cats', [CatController::class, 'store'])->name('cats.store');

Route::get('/cats/{cat}/edit', [CatController::class, 'edit'])->name('cats.edit');
Route::put('/cats/{cat}',  [CatController::class, 'update'])->name('cats.update');

Route::delete('/cats/{cat}', [CatController::class, 'destroy'])->name('cats.destroy');

Route::get('/auth/register', [AuthController::class, 'create'])->name('auth.create')->middleware('guest');
Route::post('/auth/store', [AuthController::class, 'store'])->name('auth.store')->middleware('guest');

Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login')->middleware('guest');
Route::post('/auth/authenticate', [AuthController::class, 'authenticate'])->name('auth.authenticate');

Route::post('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');
