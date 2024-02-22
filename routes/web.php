<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get(‘/hello’, [WelcomeController::class,’hello’]);

Route::get('/tes', function(){
    return 'Selamat Datang';
});

Route::get('/about', function(){
    return '2141762139';
});

Route::get('/user/{name}', function($name){
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{articles}/id/{id}', function ($articlesId, $idId) {
    return 'Halaman Artikel-'.$articlesId." id ke-: ".$idId;
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name;
});
