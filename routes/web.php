<?php

use App\Models\Post;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;

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
        'totalArtikel' => Post::count(),
        'totalCategory' => Category::count()
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
        'categories' => Category::all()
    ]);
});

// halaman category
Route::get("/categories/{category:slug}", function (Category $category) {
    return view("posts", [
        "title" => "Post By Category : $category->name",
        'posts' => $category->posts->load('category', 'author'),
    ]);
});

// halaman author
Route::get("/authors/{author:username}", function (User $author) {
    return view("posts", [
        "title" => "Posts By Author : $author->name",
        'posts' => $author->posts->load('category', 'author'),
    ]);
});
?>