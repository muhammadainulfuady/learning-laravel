<?php

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

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about', [
        "name" => "Muhammad Ainul Fuady",
        "email" => "ainulfuadi1234@gmail.com",
        "nim" => "240411100009",
        "prodi" => "Teknik Informatika",
        "image" => "ANIME.jpg"
    ]);
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/welcome', function () {
    return view('welcome');
});
?>