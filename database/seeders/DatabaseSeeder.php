<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ziad Talaat',
            'email' => 'ziadtallat33@gmail.com',
            'password' => bcrypt('ziadxddd'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Blog::factory(4)->create();
        Gallery::factory(4)->create();

    }
}
