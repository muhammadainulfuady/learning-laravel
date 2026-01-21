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
Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Masa Depan AI di Dunia Informatika",
            "slug" => "masa-depan-ai-di-dunia-informatika",
            "author" => "Muhammad Ainul Fuady",
            "body" => "Perkembangan kecerdasan buatan atau AI telah membawa perubahan besar dalam industri teknologi di tahun 2026. Sebagai mahasiswa Teknik Informatika, memahami cara kerja algoritma pembelajaran mesin menjadi sangat krusial. AI tidak hanya membantu dalam proses penulisan kode atau debugging, tetapi juga membuka peluang baru dalam pengembangan sistem cerdas yang mampu memecahkan masalah kompleks di masyarakat. Integrasi antara framework modern seperti Laravel dengan API berbasis AI memungkinkan kita membangun aplikasi yang jauh lebih responsif dan personal bagi setiap pengguna di masa depan."
        ],
        [
            "title" => "Keunggulan Laravel 8 untuk Pemula",
            "slug" => "keunggulan-laravel-8-untuk-pemula",
            "author" => "Sandhika Galih",
            "body" => "Meskipun saat ini sudah muncul versi yang lebih baru, Laravel 8 tetap menjadi fondasi yang sangat kuat bagi siapa saja yang baru mulai belajar framework PHP. Dengan fitur seperti Blade Templating, Eloquent ORM, dan sistem routing yang sangat rapi, mahasiswa dapat memahami konsep Model-View-Controller atau MVC dengan lebih mudah. Dokumentasi yang lengkap serta komunitas yang sangat luas di Indonesia membuat proses pembelajaran menjadi jauh lebih efektif. Mempelajari struktur folder dan arsitektur Laravel 8 akan memberikan pemahaman mendalam tentang bagaimana standar industri pengembangan web sebenarnya bekerja."
        ]
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get("/post/{slug}", function ($slug) {
    $blog_posts = [
        [
            "title" => "Masa Depan AI di Dunia Informatika",
            "slug" => "masa-depan-ai-di-dunia-informatika",
            "author" => "Muhammad Ainul Fuady",
            "body" => "Perkembangan kecerdasan buatan atau AI telah membawa perubahan besar dalam industri teknologi di tahun 2026. Sebagai mahasiswa Teknik Informatika, memahami cara kerja algoritma pembelajaran mesin menjadi sangat krusial. AI tidak hanya membantu dalam proses penulisan kode atau debugging, tetapi juga membuka peluang baru dalam pengembangan sistem cerdas yang mampu memecahkan masalah kompleks di masyarakat. Integrasi antara framework modern seperti Laravel dengan API berbasis AI memungkinkan kita membangun aplikasi yang jauh lebih responsif dan personal bagi setiap pengguna di masa depan."
        ],
        [
            "title" => "Keunggulan Laravel 8 untuk Pemula",
            "slug" => "keunggulan-laravel-8-untuk-pemula",
            "author" => "Sandhika Galih",
            "body" => "Meskipun saat ini sudah muncul versi yang lebih baru, Laravel 8 tetap menjadi fondasi yang sangat kuat bagi siapa saja yang baru mulai belajar framework PHP. Dengan fitur seperti Blade Templating, Eloquent ORM, dan sistem routing yang sangat rapi, mahasiswa dapat memahami konsep Model-View-Controller atau MVC dengan lebih mudah. Dokumentasi yang lengkap serta komunitas yang sangat luas di Indonesia membuat proses pembelajaran menjadi jauh lebih efektif. Mempelajari struktur folder dan arsitektur Laravel 8 akan memberikan pemahaman mendalam tentang bagaimana standar industri pengembangan web sebenarnya bekerja."
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view("post", [
        "title" => $slug,
        "post" => $new_post
    ]);
});
?>