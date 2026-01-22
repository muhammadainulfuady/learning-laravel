<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Masa Depan AI di Dunia Informatika",
            "author" => "Muhammad Ainul Fuady",
            "img" => "img-ai.png",
            "slug" => "masa-depan-ai-di-dunia-informatika",
            "body" => "Perkembangan kecerdasan buatan atau AI telah membawa perubahan besar dalam industri teknologi di tahun 2026. Sebagai mahasiswa Teknik Informatika, memahami cara kerja algoritma pembelajaran mesin menjadi sangat krusial. AI tidak hanya membantu dalam proses penulisan kode atau debugging, tetapi juga membuka peluang baru dalam pengembangan sistem cerdas yang mampu memecahkan masalah kompleks di masyarakat. Integrasi antara framework modern seperti Laravel dengan API berbasis AI memungkinkan kita membangun aplikasi yang jauh lebih responsif dan personal bagi setiap pengguna di masa depan."
        ],
        [
            "title" => "Keunggulan Laravel 8 untuk Pemula",
            "img" => "img-laravel.png",
            "author" => "Sandhika Galih WPU",
            "slug" => "keunggulan-laravel-8-untuk-pemula",
            "body" => "Meskipun saat ini sudah muncul versi yang lebih baru, Laravel 8 tetap menjadi fondasi yang sangat kuat bagi siapa saja yang baru mulai belajar framework PHP. Dengan fitur seperti Blade Templating, Eloquent ORM, dan sistem routing yang sangat rapi, mahasiswa dapat memahami konsep Model-View-Controller atau MVC dengan lebih mudah. Dokumentasi yang lengkap serta komunitas yang sangat luas di Indonesia membuat proses pembelajaran menjadi jauh lebih efektif. Mempelajari struktur folder dan arsitektur Laravel 8 akan memberikan pemahaman mendalam tentang bagaimana standar industri pengembangan web sebenarnya bekerja."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        /*
            jadi kode yang ada di bawah sini merupakan representasi dari kode if statement
            yang dimana untuk penjelasan sendiri : ambil data yang ada di dalam posts, lau cek key bagian slugg dan cek apakah dia itu === dengan $slug kalau iya tampilkanlah data nya.....
        */
        return $posts->firstWhere("slug", $slug);
    }
}
