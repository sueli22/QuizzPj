<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UiController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('ui.home');
})->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/contact',[UiController::class,'contact'])->name('contact');
Route::get('/about',[UiController::class,'about'])->name('about');

Route::post('/register',[AuthController::class,'userStore'])->name('register');
Route::post('/login',[AuthController::class,'loginStore'])->name('login');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');


Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

