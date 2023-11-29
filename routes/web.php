<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/page1', [App\Http\Controllers\HomeController::class, 'page1'])->name('page1');
Route::get('/page2', [App\Http\Controllers\HomeController::class, 'page2'])->name('page2');
Route::get('/page3', [App\Http\Controllers\HomeController::class, 'page3'])->name('page3');
Route::get('/page4', [App\Http\Controllers\HomeController::class, 'page4'])->name('page4');
Route::get('/page5', [App\Http\Controllers\HomeController::class, 'page5'])->name('page5');
Route::get('/page6', [App\Http\Controllers\HomeController::class, 'page6'])->name('page6');
Route::get('/page7', [App\Http\Controllers\HomeController::class, 'page7'])->name('page7');
Route::get('/page8', [App\Http\Controllers\HomeController::class, 'page8'])->name('page8');
Route::get('/page9', [App\Http\Controllers\HomeController::class, 'page9'])->name('page9');
Route::get('/page10', [App\Http\Controllers\HomeController::class, 'page10'])->name('page10');
Route::get('/page11', [App\Http\Controllers\HomeController::class, 'page11'])->name('page11');
Route::post('/page11', [App\Http\Controllers\HomeController::class, 'page11Store'])->name('page11.submit');
Route::get('/page12', [App\Http\Controllers\HomeController::class, 'page12'])->name('page12');
Route::post('/page12', [App\Http\Controllers\HomeController::class, 'page12Store'])->name('page12.submit');
Route::get('/page13', [App\Http\Controllers\HomeController::class, 'page13'])->name('page13');
Route::post('/page13', [App\Http\Controllers\HomeController::class, 'page13Store'])->name('page13.submit');

// Route::get('/page2', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
