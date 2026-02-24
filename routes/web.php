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

