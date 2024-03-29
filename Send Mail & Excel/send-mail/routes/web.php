<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\MailController;

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


Route::get('/send-mail', [MailController::class, 'sendMail'])->name('sendMail');
Route::post('/send-mail', [MailController::class, 'sentMail'])->name('sentMail');


Route::get('/export',[DemoController::class, 'export'])->name('export');
Route::get('/importExportView',[DemoController::class, 'importExportView']);
Route::post('/import',[DemoController::class, 'import'])->name('import');
