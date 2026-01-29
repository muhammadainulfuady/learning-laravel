<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;

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
        'name' => 'LaraveL 404',
        "title" => "Home",
        'active' => 'home',
        'totalArtikel' => Post::count(),
        'totalCategory' => Category::count()
    ]);
});

// route about
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'about',
        "name" => "Muhammad Ainul Fuady",
        "email" => "ainulfuadi1234@gmail.com",
        "nim" => "240411100009",
        "prodi" => "Teknik Informatika",
        "image" => "gambar-6.jpg"
    ]);
});

// route blog
Route::get('/posts', [PostController::class, "index"]);

// halaman single post dengan metode binding
Route::get("/posts/{post:slug}", [PostController::class, "show"]);

// halaman contact
Route::get("/contact", [ContactController::class, "showContact"]);

// halaman categories
Route::get("/categories", function () {
    return view("categories", [
        "title" => 'Post categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});
Route::get("/login", [LoginController::class, "index"])->name('login')->middleware('guest');
Route::post("/login", [LoginController::class, "authenticate"]);
Route::post("/logout", [LoginController::class, "logout"]);
Route::get("/register", [RegisterController::class, "index"])->middleware('guest');
Route::post("/register", [RegisterController::class, "store"]);
Route::get("/dashboard", [DashboardController::class, "index"])->middleware('auth');
?>
