<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // Category::create([
        //     'name' => 'Komputer',
        //     'slug' => 'komputer'
        // ]);

        // Category::create([
        //     'name' => 'Politik',
        //     'slug' => 'politik'
        // ]);

        Category::create([
            'name' => 'Wisata',
            'slug' => 'wisata'
        ]);

        // Category::create([
        //     'name' => 'Elektronik',
        //     'slug' => 'elektronik'
        // ]);

        \App\Models\User::factory(4)->create();
        \App\Models\Post::factory(10)->create();
        // \App\Models\Category::factory(2)->create();
        // \App\Models\Author::factory(1000)->create();
        // User::factory(5)->create();

        // Post::factory(20)->create();
    }
}
