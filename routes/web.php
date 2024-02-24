<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
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

Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/index', [PageController::class,'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/articles/{id}', [PageController::class,'articles']);
Route::get('/test', [PageController::class,'test']);

//Modifikasi praktikum 2
Route::get('/Selamat', [HomeController::class,'Selamat']);
Route::get('/Tentang', [AboutController::class,'Tentang']);
Route::get('/Artikel/{id}', [ArticleController::class,'Artikel']);

// PhotoController
Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([ 'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([ 'create', 'store', 'update', 'destroy'
]);

// View
// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Jati Wahyu Kusuma']);
//     });
Route::get('/greeting', [WelcomeController::class, 'greeting']);       


Route::get('/tes', function(){
    return 'Selamat Datang';
});

// Route::get('/about', function(){
//     return '2141762139';
// });

// Route::get('/user/{name}', function($name){
//     return 'Nama saya '.$name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });

// Route::get('/articles/{articles}/id/{id}', function ($articlesId, $idId) {
//     return 'Halaman Artikel-'.$articlesId." id ke-: ".$idId;
// });

// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name;
// });

// Route::get('/user/{name?}', function ($name='John') { 
//     return 'Nama saya '.$name;
// });

