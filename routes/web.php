<?php

use App\Http\Controllers\ProductsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/upload', [ProductsController::class, 'index']);
Route::post('/upload', [ProductsController::class, 'upload']);
Route::get('/batch', [ProductsController::class, 'batch']);
Route::get('/batch/in-progress', [ProductsController::class, 'batchInProgress']);
