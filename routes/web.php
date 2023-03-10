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


Route::get('/', [ CatController::class, 'index'] )
                 ->name('cats.list')
                 ->middleware('auth');

// create cat get and post
Route::get('/cats/create', [CatController::class, 'create'])
                            ->name('cats.create')
                            ->middleware('auth');
Route::post('/cats', [CatController::class, 'store'])
                      ->name('cats.store')
                      ->middleware('auth');

// edit cat get and post
Route::get('/cats/{cat}/edit', [CatController::class, 'edit'])
                                ->name('cats.edit')
                                ->middleware('auth');
Route::put('/cats/{cat}',  [CatController::class, 'update'])
                                 ->name('cats.update')
                                 ->middleware('auth');

// delete cat post
Route::delete('/cats/{cat}', [CatController::class, 'destroy'])
                              ->name('cats.destroy')
                              ->middleware('auth');

// register get and post
Route::get('/auth/register', [AuthController::class, 'create'])
                            ->name('auth.create')
                            ->middleware('guest');

Route::post('/auth/store', [AuthController::class, 'store'])
                            ->name('auth.store')
                            ->middleware('guest');

// login get and post
Route::get('/auth/login', [AuthController::class, 'login'])
                           ->name('auth.login')
                           ->middleware('guest');

Route::post('/auth/authenticate', [AuthController::class, 'authenticate'])
                                   ->name('auth.authenticate')
                                   ->middleware('guest');

// logout                                
Route::post('/auth/logout', [AuthController::class, 'logout'])
                             ->name('auth.logout')
                             ->middleware('auth');
