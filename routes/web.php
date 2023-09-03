<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('/verzio2', [Controller::class, 'verzio2'])->name('verzio2');
Route::get('/verzio3', [Controller::class, 'verzio3'])->name('verzio3');
Route::get('/verzio4', [Controller::class, 'verzio4'])->name('verzio4');

