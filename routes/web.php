<?php
 namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/user/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('employee', \App\Http\Controllers\EmployeeController::class);

});
Route::group(['middleware' => 'auth'], function () {
Route::resource('appoinment', \App\Http\Controllers\AppoinmentController::class);
});

Route::group(['middleware' => 'auth'], function () {
Route::resource('category', \App\Http\Controllers\CatController::class);
});
// Route::get('/post', [UserController::class, 'index']);
Route::group(['middleware' => 'auth'], function () {
Route::resource('post', \App\Http\Controllers\PostController::class);
 // Route::post('comment/{post}', 'CommentController@store')->name('comment.store');
  Route::post('comment/{post}', [CommentController::class, 'store'])->name('comment.store');
    Route::get('like/{post_id}', [LikeController::class, 'like'])->name('like');
 Route::resource('usertype', \App\Http\Controllers\UserTypeController::class);
  Route::resource('user', \App\Http\Controllers\UserController::class);

});
 Route::get('single-page/{post}', [PostController::class, 'details'])->name('post.details');


// Route::get('/single-page', function () {
//     return view('single-page');
// });

