<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedditController;

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


Route::get('/hot', [RedditController::class, 'getHotPosts'])->name('hot');;
Route::get('/new', [RedditController::class, 'getNewPosts'])->name('new');;
Route::get('/rising', [RedditController::class, 'getRisingPosts'])->name('rising');;

Route::get('/',  [RedditController::class, 'welcome'])->name('welcome');;



