<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/bio/{name}/{NIM}', [WelcomeController::class,'bio']);

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

Route::get('/about', [WelcomeController::class,'about']);
Route::get('/', [WelcomeController::class,'index']);
