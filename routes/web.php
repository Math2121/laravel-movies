<?php

use App\Http\Controllers\ActorsController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\TvControlller;
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


Route::get('/',[MoviesController::class,'index'])->name('movies.index');
Route::get('/movies/{movie}',[MoviesController::class,'show'])->name('movies.show');

Route::get('/actors',[ActorsController::class,'index'])->name('actors.index');
Route::get('/actors/page/{page?}',[ActorsController::class,'index']);
Route::get('/actors/{actor}',[ActorsController::class,'show'])->name('actors.show');

Route::get('/tv',[TvControlller::class,'index'])->name('tv.index');
Route::get('/tv/{tv}',[TvControlller::class,'show'])->name('tv.show');
