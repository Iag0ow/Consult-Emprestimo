<?php

use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/login', [SiteController::class, 'loginPage'])->name('site.index');
Route::post('/login', [SiteController::class, 'login'])->name('site.login');
Route::get('/logout', [SiteController::class, 'logout'])->name('site.logout');
Route::get('/clientes', [SiteController::class, 'clientes'])->middleware('auth');
Route::get('/simulacao', [SiteController::class, 'simular']);
Route::post('/simulacao', [SiteController::class, 'simulacao'])->name('site.simulacao');
