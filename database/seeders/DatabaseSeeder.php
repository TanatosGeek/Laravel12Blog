<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Category;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Section;
use App\Models\Tag;
use App\Models\Tags;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        
        $this->call(UserSeeder::class);

        $this->call(CategorySeeder::class);

        $this->call(PostSeeder::class);

        $this->call(CourseSeeder::class);

        $this->call(TagSeeder::class);


    }
}
