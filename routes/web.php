<?php

use App\Http\Controllers\ShelfController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ShelfController::class, 'index'])->name('index');

Route::get('/landing', [ShelfController::class, 'landing'])->name('landing');

