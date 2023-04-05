<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
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



Route::get('home',[BlogController::class,'blog']);
Route::get('about',[BlogController::class,'about']);
Route::get('contact',[BlogController::class,'viewform'])->name('contact');
Route::post('contact',[BlogController::class,'savedata']);
Route::get('services',[BlogController::class,'services']);
Route::get('modal',[BlogController::class,'modal']);

Route::get('index',[BlogController::class,'index']);
Route::get('index',[BlogController::class,'display']);
Route::get('delete/{id}',[BlogController::class,'delete'])->name('delete');
Route::get('edit/{id}',[BlogController::class,'edit']);
 Route::post('update',[BlogController::class,'update']);


