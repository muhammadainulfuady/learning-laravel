<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route home
Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

// route about
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhammad Ainul Fuady",
        "email" => "ainulfuadi1234@gmail.com",
        "nim" => "240411100009",
        "prodi" => "Teknik Informatika",
        "image" => "ANIME.jpg"
    ]);
});

// route blog
Route::get('/posts', [PostController::class, "index"]);

// halaman single post
Route::get("/posts/{slug}", [PostController::class, "show"]);

// halaman contact
Route::get("/contact", [ContactController::class, "showContact"]);
?>