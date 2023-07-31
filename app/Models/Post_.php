<?php

namespace App\Models;

class Post
{
  private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Rafi",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error voluptas totam facilis tempore mollitia dolorem beatae autem fugiat maxime consequuntur dolore veritatis reiciendis nam incidunt officia quasi, aspernatur pariatur debitis adipisci unde quam sequi? Impedit consequuntur quae vel temporibus, porro odio optio? Repellat blanditiis rem ab adipisci quas esse similique, beatae, pariatur, dicta harum est maiores deleniti ipsum tenetur. Nihil obcaecati deleniti quod ab voluptate tempora est quis, fuga dolore illo ex necessitatibus corrupti autem? Ut voluptas unde aliquid voluptatum?"
        ],
        [
            "title" => "Judul Tulisan Rafi",
            "slug" => "judul-post-kedua",
            "author" => "Reyhan Surya Refalda",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum rerum, ut quo eius, atque numquam praesentium vel sunt veritatis deleniti ipsam eaque beatae perspiciatis est error obcaecati quod odit dolorem labore optio, repudiandae inventore harum! Voluptatem, est vel. Delectus ipsum reprehenderit sed modi neque accusantium, possimus, cupiditate pariatur libero amet obcaecati error iure, tenetur sit earum incidunt mollitia voluptas assumenda veritatis optio unde repellendus nostrum! Temporibus possimus cumque at quos unde nihil, nam ullam ratione nesciunt corporis. Natus minus blanditiis quos numquam ex quod, adipisci beatae quae neque debitis sunt corporis hic consequuntur dolorum praesentium autem, quidem sapiente illum repellendus."
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