<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Post;
use App\Models\ContactMe;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Muhammad Ainul Fuady',
        //     'email' => 'ainulfuadi1234@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Sandhika Galih',
        //     'email' => 'sandhikagalih1234@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();
        ContactMe::factory(1)->create();

        // Post::create([
        //     'title' => 'Masa Depan PHP di Era Modern',
        //     'slug' => 'masa-depan-php-era-modern',
        //     'excerpt' => 'Banyak yang bilang PHP sudah mati, tapi faktanya framework seperti Laravel justru semakin merajai dunia pengembangan web saat ini.',
        //     'body' => 'PHP terus berevolusi dengan fitur-fitur baru yang membuatnya semakin cepat dan efisien. Dengan adanya Laravel, developer kini bisa membangun aplikasi skala besar dengan struktur kode yang sangat rapi dan aman. Bagi mahasiswa informatika, menguasai PHP modern adalah investasi yang sangat bagus karena permintaan pasar untuk engineer di bidang ini masih sangat tinggi, terutama untuk mengelola sistem informasi kompleks di instansi pemerintahan maupun startup.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Mengapa Belajar Framework Laravel Itu Penting',
        //     'slug' => 'pentingnya-belajar-framework-laravel',
        //     'excerpt' => 'Bagi mahasiswa informatika, Laravel bukan sekadar framework, tapi standar industri untuk membangun aplikasi web yang aman dan skalabel.',
        //     'body' => 'Laravel memudahkan banyak hal dalam pengembangan web, mulai dari sistem routing yang rapi, manajemen database menggunakan Eloquent ORM, hingga fitur keamanan bawaan untuk mencegah SQL Injection. Menggunakan Laravel memungkinkan kita sebagai developer untuk lebih fokus pada logika bisnis daripada harus menulis kode dasar yang berulang-ulang. Di kampus atau dunia kerja, kemampuan menguasai ekosistem Laravel seperti Middleware, Controller, dan Blade Engine akan menjadi nilai tambah yang sangat besar bagi karir seorang software engineer.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Konsistensi: Antara Baris Kode dan Lintasan Lari',
        //     'slug' => 'konsistensi-kode-dan-lintasan-lari',
        //     'excerpt' => 'Menyeimbangkan gaya hidup sehat dengan kesibukan kuliah Informatika bukan hal mudah, tapi lari 7.42 KM mengajarkan saya tentang daya tahan.',
        //     'body' => 'Sebagai mahasiswa Teknik Informatika yang sering duduk berjam-jam di depan layar untuk koding Laravel, menjaga kesehatan adalah tantangan tersendiri. Melalui hobi lari, saya belajar bahwa progres itu tidak instan, sama seperti saat memperbaiki bug yang rumit. Mulai dari berat badan 85kg hingga mencapai 73kg adalah perjalanan yang membutuhkan disiplin tinggi. Olahraga bukan hanya tentang fisik, tapi juga melatih mental untuk tetap fokus dalam menyelesaikan tugas akhir maupun proyek web development yang sedang saya kerjakan.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Disiplin di Luar Kampus: Cerita di Balik Target 73kg',
        //     'slug' => 'disiplin-diet-dan-akademik',
        //     'excerpt' => 'Menjaga IPK tetap di angka 3.58 butuh fokus, sama halnya dengan menjaga konsistensi diet untuk menurunkan berat badan dari 85kg.',
        //     'body' => 'Banyak orang bertanya bagaimana cara membagi waktu antara tugas kuliah Teknik Informatika yang padat dengan jadwal olahraga rutin. Kuncinya adalah disiplin yang terukur. Saat saya memutuskan untuk lari sejauh 7.42 KM, saya tidak hanya melatih fisik, tapi juga mental untuk tidak cepat menyerah pada keadaan. Transformasi dari berat 85kg menuju target 73kg adalah bukti nyata bahwa segala sesuatu yang besar dimulai dari langkah-langkah kecil yang konsisten. Prinsip ini juga saya terapkan dalam belajar Laravel; setiap eror yang muncul adalah tantangan, bukan penghalang, untuk menjadi pribadi yang lebih baik dari hari kemarin.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
