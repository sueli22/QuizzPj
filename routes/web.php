<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuestionController;
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

//stulist

Route::get('student/list',[AdminController::class,'studentList'])->name('student.list');

//Category

Route::get('/categories',[CategoryController::class,'categories'])->name('categories');
Route::get('/category/add',[CategoryController::class,'add'])->name('add.category');
Route::post('/category/store',[CategoryController::class,'store'])->name('store.category');
Route::delete('/category/delete/{id}',[CategoryController::class,'delete'])->name('delete.category');
Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('edit.category');
Route::put('category/update/{id}',[CategoryController::class,'update'])->name('update.category');

//Question

Route::get('/question',[QuestionController::class,'index'])->name('questions');
Route::get('/question/add',[QuestionController::class,'add'])->name('add.question');
Route::post('question/store',[QuestionController::class,'store'])->name('store.question');
Route::delete('question/delete,{id}',[QuestionController::class,'delete'])->name('delete.question');


