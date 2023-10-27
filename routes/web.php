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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Deni Pajri",
        "email" => "deni.213040044@mail.unpas.ac.id",
        "image" => "profile.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Deni Pajri",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, nostrum? Asperiores dignissimos at quaerat officia, ullam consectetur iste ab minima labore cum culpa libero cupiditate aliquid rerum quisquam suscipit explicabo vero sed vel eveniet iusto. Pariatur perspiciatis nam corporis optio soluta porro harum nihil illo? Veniam voluptates, repudiandae quos velit possimus numquam dolores temporibus sequi commodi similique consectetur dicta placeat optio doloremque perspiciatis. Aut accusantium a repellat itaque, perspiciatis assumenda veniam? Aliquid consequatur quia, corporis voluptatibus vel dolor placeat beatae?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Agie Rivaldy",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam dolore illum officiis cumque iusto odio aut sequi ducimus quam, reiciendis eum facere quibusdam? Ad nihil doloribus porro tenetur, modi vitae! Expedita a enim asperiores! Totam similique molestiae impedit eaque natus dolorem odio perferendis at, modi cum repellat eum amet. Cupiditate mollitia nam iusto eaque possimus id, delectus modi nesciunt officia assumenda! Est maxime molestiae voluptatem, inventore ipsum debitis. Cum quidem rerum error natus magni recusandae deserunt mollitia architecto nesciunt nulla quasi fugiat quisquam eos a aperiam molestiae facilis, vero dolore! Cupiditate reprehenderit tenetur eveniet modi unde totam aliquid voluptatem magni?"
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Deni Pajri",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, nostrum? Asperiores dignissimos at quaerat officia, ullam consectetur iste ab minima labore cum culpa libero cupiditate aliquid rerum quisquam suscipit explicabo vero sed vel eveniet iusto. Pariatur perspiciatis nam corporis optio soluta porro harum nihil illo? Veniam voluptates, repudiandae quos velit possimus numquam dolores temporibus sequi commodi similique consectetur dicta placeat optio doloremque perspiciatis. Aut accusantium a repellat itaque, perspiciatis assumenda veniam? Aliquid consequatur quia, corporis voluptatibus vel dolor placeat beatae?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Agie Rivaldy",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam dolore illum officiis cumque iusto odio aut sequi ducimus quam, reiciendis eum facere quibusdam? Ad nihil doloribus porro tenetur, modi vitae! Expedita a enim asperiores! Totam similique molestiae impedit eaque natus dolorem odio perferendis at, modi cum repellat eum amet. Cupiditate mollitia nam iusto eaque possimus id, delectus modi nesciunt officia assumenda! Est maxime molestiae voluptatem, inventore ipsum debitis. Cum quidem rerum error natus magni recusandae deserunt mollitia architecto nesciunt nulla quasi fugiat quisquam eos a aperiam molestiae facilis, vero dolore! Cupiditate reprehenderit tenetur eveniet modi unde totam aliquid voluptatem magni?"
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
