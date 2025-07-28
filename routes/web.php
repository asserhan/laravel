<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return response('<h1>hello world</h1>');
   
});

Route::get('/posts/{id}',function($id){
    return response('post '.$id);

})->where('id', '[0-9]+');