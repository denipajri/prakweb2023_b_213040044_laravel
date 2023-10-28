<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all() 
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug) 
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
