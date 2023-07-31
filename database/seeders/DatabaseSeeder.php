<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'Muhammad Rafi',
            'username'=> "muhammadrafi", 
            'email' => 'raafii18@gmail.com',
            'password' => bcrypt('12345')  
        ]);

        // User::create([
        //     'name' =>'Reyhan Surya Refalda',
        //     'email' => 'reyhan29@gmail.com',
        //     'password' => bcrypt('12345')  
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Copy Writing',
            'slug' => 'copy-writing'
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);


        Post::factory(20)->create();
    }
}