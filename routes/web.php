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


Route::get('/hot', [RedditController::class, 'getHotPosts']);
Route::get('/new', [RedditController::class, 'getNewPosts']);
Route::get('/rising', [RedditController::class, 'getRisingPosts']);

Route::get('/', function () {

    return view('welcome');
});
