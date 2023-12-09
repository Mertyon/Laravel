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
Route::get('/', [\App\Http\Controllers\homecontroller::class, 'index']);
Route::get('/show', [\App\Http\Controllers\homecontroller::class, 'show']);
Route::get('/time', [\App\Http\Controllers\homecontroller::class, 'time']);