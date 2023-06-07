<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul_post_pertama',
            'author' => 'Muhammad Syaifudin',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque debitis numquam, quia error voluptatem iure delectus impedit nam eius! Sed suscipit quaerat, omnis nesciunt repellat eligendi commodi illo odit neque tempore recusandae molestiae, dolorum officiis laborum, distinctio nostrum. Tempore eveniet saepe et sapiente quod voluptatibus libero repudiandae consequuntur quia cupiditate in, commodi aliquam amet minima sunt qui velit soluta a. Repellendus pariatur aliquam quis suscipit, perferendis praesentium impedit ducimus quaerat nihil itaque deleniti quia neque harum eaque a! Neque, nesciunt!'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul_post_kedua',
            'author' => 'Muhammad Mujahidin',
            'body' => 'Neque debitis numquam, quia error voluptatem iure delectus impedit nam eius! Sed suscipit quaerat, omnis nesciunt repellat eligendi commodi illo odit neque tempore recusandae molestiae, dolorum officiis laborum, distinctio nostrum. Tempore eveniet saepe et sapiente quod voluptatibus libero repudiandae consequuntur quia cupiditate in, commodi aliquam amet minima sunt qui velit soluta a. Repellendus pariatur aliquam quis suscipit, perferendis praesentium impedit ducimus quaerat nihil itaque deleniti quia neque harum eaque a! Neque, nesciunt! Lorem ipsum dolor sit amet consectetur adipisicing elit.'
        ],
        [
            'title' => 'Judul Post Ketiga',
            'slug' => 'judul_post_ketiga',
            'author' => 'Robert Davies Chaniago',
            'body' => 'Repellendus pariatur aliquam quis suscipit, perferendis praesentium impedit ducimus quaerat nihil itaque deleniti quia neque harum eaque a! Neque, nesciunt! Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque debitis numquam, quia error voluptatem iure delectus impedit nam eius! Sed suscipit quaerat, omnis nesciunt repellat eligendi commodi illo odit neque tempore recusandae molestiae, dolorum officiis laborum, distinctio nostrum. Tempore eveniet saepe et sapiente quod voluptatibus libero repudiandae consequuntur quia cupiditate in, commodi aliquam amet minima sunt qui velit soluta a.'
        ]
    ];

    // public static function all()
    // {
    //     return self::$blog_posts;
    // }

    // public static function find($slug)
    // {
    //     $blog_posts = self::$blog_posts;
    //     $newpost = [];
    //     foreach ($blog_posts as $post) {
    //         if ($post['slug'] === $slug) {
    //             $newpost = $post;
    //         }
    //     }
    //     return $newpost;

    // }
}
