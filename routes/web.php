<?php

use Illuminate\Support\Facades\Route;
use App\Models\Cat;
use App\Http\Controllers\CatController;

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

// Route::get('cats/{cat}', function (Cat $cat) {
//     return view('cats\cat', [
//         'cat' => $cat
//     ]);
// });