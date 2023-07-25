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
Route::get('/rolunk', [Controller::class, 'rolunk'])->name('rolunk');
Route::get('/kepzesek', [Controller::class, 'kepzesek'])->name('kepzesek');
Route::get('/uzletviteli_tanacsadas', [Controller::class, 'uzletviteli'])->name('uzletviteli');
Route::get('/business_coaching', [Controller::class, 'coaching'])->name('coaching');
Route::get('/kapcsolat', [Controller::class, 'kapcsolat'])->name('kapcsolat');

