<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Controller;
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

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('home',[BlogController::class,'blog']);
Route::get('about',[BlogController::class,'about']);
Route::get('contact',[BlogController::class,'viewform'])->name('contact');
Route::post('contact',[BlogController::class,'savedata']);
Route::get('services',[BlogController::class,'services']);
