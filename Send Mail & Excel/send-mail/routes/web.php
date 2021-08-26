<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\DemoController;

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

Route::get('/send-mail', function () {
    $details = [
        'title' => 'Mail From Surfside media',
        'body' => 'This is from testing mail using smtp'
    ];
    \Mail::to('alexmarfee101@gmail.com')->send(new \App\Mail\TestMail($details));
    echo "Email Has Been Sent";
});




Route::get('/export',[DemoController::class, 'export'])->name('export');
Route::get('/importExportView',[DemoController::class, 'importExportView']);
Route::post('/import',[DemoController::class, 'import'])->name('import');;
