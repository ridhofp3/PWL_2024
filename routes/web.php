<?php

// use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

use App\Http\Controllers\PhotoController;


// Route::get('/hello', function () {
//     return 'Hello World';
// });


Route::get('/world', function () {
    return 'World';
});

Route::get('/selamat', function () {
    return 'Selamat Datang';
});

Route::get('/info', function () {
    return 'Nama : Ridho Fauzian Pratama <br>Nim :  2241720142';
});

// Route::get('/user/{name}', function ($name) {
//     return 'Nama Saya : ' . $name;
// });

// Route::get('/user', function () {
//     return 'Nama Saya : ';
// });

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID ' . $id;
// });

// Route::get('/user/{name?}', function ($name = null) {
//     return 'Nama Saya : ' . $name;
// });

// Route::get('/', function ($name = 'John') {
//     return 'Nama saya ' . $name;
// });

Route::get('/user/profile', function () {
    //
})->name('profile');

//sini
// Route::middleware(['first', 'second'])->group(function () { 
//     Route::get('/', function () { 
//     }); 

//     Route::get('/user/profile', function () { 
//     }); 
// }); 

// Route::domain('{account}.example.com')->group(function () { 
//     Route::get('/user/{id}', function ($account, $id) { 
//     }); 
// }); 

// Route::middleware('auth')->group(function () { 
//     Route::get('/user', [UserController::class, 'index']); 
//     Route::get('/post', [PostController::class, 'index']); 
//     Route::get('/event', [EventController::class, 'index']); 
// });
//sampai saya sini




Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);



//untuk controller
Route::get('/hello', [WelcomeController::class, 'hello']);

//routing
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

//modifikasi routing
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);


//Photocontroller
Route::resource('photo', PhotoController::class);

Route::resource('photo', PhotoController::class)->only(['index', 'show']);
Route::resource('photo', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);


//view 
// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Ridho']);
// });

Route::get('/greeting', [WelcomeController::class, 'greeting']);