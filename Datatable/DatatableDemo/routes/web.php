<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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
    return view('welcome');
});

Route::get('/datatable', [ DataController::class, 'index' ])->name('datatable');
Route::get('/load', [ DataController::class, 'load' ])->name('load');
Route::get('/load2', [ DataController::class, 'load2' ])->name('load2');


