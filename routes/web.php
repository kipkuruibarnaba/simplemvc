<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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



Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/folder_1', [PageController::class, 'folder_1'])->name('folder_1');
Route::get('/folder_2', [PageController::class, 'folder_2'])->name('folder_2');

Route::get('/count', [PageController::class, 'count_strawberry'])->name('count_strawberry');
