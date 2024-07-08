<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use LDAP\Result;

Route::get('/', function () {
    return view('ui.home');
})->name('home');
Route::get('/aim', [UiController::class, 'aim'])->name('aim');
Route::get('/learn', [UiController::class, 'learn'])->name('learn');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginStore'])->name('login');
Route::post('/register', [AuthController::class, 'userStore'])->name('register');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    //stulist

    Route::get('student/list', [AdminController::class, 'studentList'])->name('student.list');
    Route::get('student/details/{id}', [AdminController::class, 'studentDetails'])->name('student.details');
    Route::get('each/student/score/{id}', [AdminController::class, 'eachScore'])->name('each.student.score');

    //Category

    Route::get('/categories', [CategoryController::class, 'categories'])->name('categories');
    Route::get('/category/add', [CategoryController::class, 'add'])->name('add.category');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('store.category');
    Route::delete('/category/delete/{id}', [CategoryController::class, 'delete'])->name('delete.category');
    Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('edit.category');
    Route::put('category/update/{id}', [CategoryController::class, 'update'])->name('update.category');

    //question
    Route::get('/question', [QuestionController::class, 'index'])->name('questions');
    Route::get('/question/add', [QuestionController::class, 'add'])->name('add.question');
    Route::post('question/store', [QuestionController::class, 'store'])->name('store.question');
    Route::delete('question/delete,{id}', [QuestionController::class, 'delete'])->name('delete.question');
    Route::get('question/edit,{id}', [QuestionController::class, 'edit'])->name('edit.question');
    Route::put('question/update,{id}', [QuestionController::class, 'update'])->name('update.question');


    //AnswerOptions
    Route::get('/options', [OptionController::class, 'index'])->name('options');
    Route::get('/option/add', [OptionController::class, 'add'])->name('add.option');
    Route::post('/options/store', [OptionController::class, 'store'])->name('store.option');
    Route::delete('/option/delete/{id}', [OptionController::class, 'delete'])->name('delete.option');
    Route::get('options/edit/{id}', [OptionController::class, 'edit'])->name('edit.option');
    Route::put('optons/update/{id}', [OptionController::class, 'update'])->name('update.option');

    //post

    Route::get('admin/post/list', [PostController::class, 'postList'])->name('admin.posts.list');
    Route::get('admin/post/create', [PostController::class, 'postCreate'])->name('admin.post.create');
    Route::post('admin/post/strore', [PostController::class, 'postStore'])->name('admin.post.store');
    Route::delete('admin/post/delete/{id}', [PostController::class, 'postDelete'])->name('admin.post.delete');
    Route::get('admin/post/edit/{id}', [PostController::class, 'postedit'])->name('admin.post.edit');
    Route::put('admin/post/update/{id}', [PostController::class, 'postUpdate'])->name('admin.post.update');


    //AdminProfileRoute

    Route::get('/admin/profile', [AdminController::class, 'adminprofile'])->name('profile.admin');
    Route::get('/admin/profile/edit/{id}', [AdminController::class, 'editProfile'])->name('edit.profile.admin');
    Route::put('/admin/profile/update/{id}', [AdminController::class, 'updateProflie'])->name('update.admin.profile');
    Route::get('/admin/password/edit', [AdminController::class, 'editPassword'])->name('edit.password.admin');
    Route::post('/admin/password/change', [AdminController::class, 'changePassword'])->name('change.password.admin');

    //SeeQuestionsFromCategoryIndexPage
    Route::get('/seequestion/{id}', [CategoryController::class, 'seeQuestions'])->name('see.questions');
    //SeeAnswersFromQuesionsIndex
    Route::get('/seeanswer/{id}', [QuestionController::class, 'seeAnswers'])->name('see.answers');


    Route::get('admin.mail.list', [AuthController::class, 'mailList'])->name('admin.mail.list');

    Route::get('/scores', [ResultController::class, 'scoreList'])->name('scores.list');
    Route::get('/delete/scores', [ResultController::class, 'deleteAll'])->name('delete.all.score');
});






Route::middleware('auth')->group(function () {

    Route::get('question/qty/{id}', [UiController::class, 'questionQty'])->name('user.question.qty');

    Route::get('comment/delete/{id}', [CommentController::class, 'deleteComment'])->name('user.comment.delete');

    Route::get('/user/categories/', [UiController::class, 'userCategories'])->name('user.categories');
    Route::get('/user/test/{id}', [UiController::class, 'testStart'])->name('test.start');

    Route::post('test', [ResultController::class, 'store'])->name('client.test.store');
    Route::get('results/{result_id}', [ResultController::class, 'show'])->name('client.results.show');
    Route::get('history', [UiController::class, 'history'])->name('history');
    Route::post('user/send/mail', [UiController::class, 'sendMail'])->name('user.send.mail');
    Route::get('profile', [UiController::class, 'profile'])->name('profile');
    Route::post('photo/{id}/update', [UiController::class, 'photoUpdate'])->name('photo.update');
    Route::get('user/pssword/update/{id}', [UiController::class, 'updatePassword'])->name('user.update.password');
    Route::post('user/update/password/done', [UiController::class, 'updateDonePassword'])->name('user.ps.update.done');

    Route::post('user/comment/store', [CommentController::class, 'commentStore'])->name('comment.store');
    Route::get('user/comments/list/{id}', [CommentController::class, 'commentList'])->name('user.comment.list');
    Route::get('user/posts', [PostController::class, 'postShow'])->name('user.posts');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/download-quiz-results/{id}', [ResultController::class, 'downloadQuizResults'])->name('download.pdf');
    Route::get('/download-quiz-results-doc/{id}', [ResultController::class, 'downloadQuizResultsDoc'])->name('download.word');
    Route::get('/download-quiz-results-csv/{id}', [ResultController::class, 'downloadQuizResultsCSV'])->name('download.csv');
});
