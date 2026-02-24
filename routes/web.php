<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
   return 'Hello World';
});

Route::get('/world', function () {
    return 'world';
});

Route::get('/user/{name}', function ($name) {
    return 'My name'.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Post to'.$postId." Comments to: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Article Page with ID '.$id;
});

Route::get('/user/{name?}', function ($name='John') {
return 'My name'.$name;
});

Route::get('/user/profile', function () {
    
})->name('profile');

Route::get('/user/profile', [UserProfileController::class, 'show'])->name('profile');
$url = route('profile');
return redirect()->route('profile');

Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
});
});

Route::domain('{account}.example.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
    });
});

Route::middleware('auth')->group(function () {
	Route::get('/user', [UserController::class, 'index']);
	Route::get('/post', [PostController::class, 'index']);
	Route::get('/event', [EventController::class, 'index']);
	
});

Route::prefix('admin')->group(function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/event', [EventController::class, 'index']);
});

Route::redirect('/here', '/there');
Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);