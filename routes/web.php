<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\DirectController;
use App\Http\Controllers\FileUpload;
use App\Http\Controllers\DbList;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [DirectController::class, 'index']);

Route::get('/list', [DirectController::class, 'list']);
Route::get('/list', [DbList::class, 'show']);

Route::get('/upload', [DirectController::class, 'upload']);
Route::get('/upload', [FileUpload::class, 'createForm']);
Route::post('/upload', [FileUpload::class, 'fileUpload'])->name('fileUpload');

//Route::get('/details/{fname}', [DirectController::class, 'details']);
Route::get('/details/{filename}', [DbList::class, 'csv_to_array']);

