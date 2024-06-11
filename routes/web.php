<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;
use Illuminate\Support\Facades\Route;
use LDAP\Result;

Route::get('/', function () {
    return view('ui.home');
})->name('home');

//userCategories
Route::get('/user/categories/',[UiController::class,'userCategories'])->name('user.categories');
Route::get('/user/test/{id}',[UiController::class,'testStart'])->name('test.start');
Route::post('test',[ResultController::class, 'store'])->name('client.test.store');
Route::get('results/{result_id}',[ResultController::class, 'show'])->name('client.results.show');

//storeResult


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
Route::get('question/edit,{id}',[QuestionController::class,'edit'])->name('edit.question');
Route::put('question/update,{id}',[QuestionController::class,'update'])->name('update.question');

//AnswerOptions

Route::get('/options',[OptionController::class,'index'])->name('options');
Route::get('/option/add',[OptionController::class,'add'])->name('add.option');
Route::post('/options/store',[OptionController::class,'store'])->name('store.option');
Route::delete('/option/delete/{id}',[OptionController::class,'delete'])->name('delete.option');
Route::get('options/edit/{id}',[OptionController::class,'edit'])->name('edit.option');
Route::put('optons/update/{id}',[OptionController::class,'update'])->name('update.option');

//SeeQuestionsFromCategoryIndexPage
Route::get('/seequestion/{id}',[CategoryController::class,'seeQuestions'])->name('see.questions');
//SeeAnswersFromQuesionsIndex
Route::get('/seeanswer/{id}',[QuestionController::class,'seeAnswers'])->name('see.answers');

//AdminProfileRoute

Route::get('/admin/profile',[AdminController::class,'adminprofile'])->name('profile.admin');
Route::get('/admin/profile/edit/{id}',[AdminController::class,'editProfile'])->name('edit.profile.admin');
Route::put('/admin/profile/update/{id}',[AdminController::class,'updateProflie'])->name('update.admin.profile');

//score
Route::get('/scores',[ResultController::class,'scoreList'])->name('scores.list');
Route::get('/delete/scores',[ResultController::class,'deleteAll'])->name('delete.all.score');

///download result pdf
Route::get('/download-quiz-results/{id}', [ResultController::class, 'downloadQuizResults'])->name('download.pdf');
Route::get('/download-quiz-results-doc/{id}', [ResultController::class, 'downloadQuizResultsDoc'])->name('download.word');
Route::get('/download-quiz-results-csv/{id}', [ResultController::class, 'downloadQuizResultsCSV'])->name('download.csv');

