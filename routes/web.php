<?php

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

Route::get('/', function () {return view('welcome');});
Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth'])->name('dashboard');

Route::get('/myPage', [App\Http\Controllers\MyPageController::class, 'myPage'])->name('myPage');;
Route::get('/create', [App\Http\Controllers\CreateController::class, 'create'])->name('create');;
Route::post('/store', [App\Http\Controllers\CreateController::class, 'store'])->name('store');;
Route::post('/conform', [App\Http\Controllers\CreateController::class, 'conform'])->name('conform');;

require __DIR__.'/auth.php';
