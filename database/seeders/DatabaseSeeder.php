<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HomePost;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\HomePost::factory(10)->create();
        \App\Models\TeacherPost::factory(10)->create();
        \App\Models\Subject::factory(10)->create();
        \App\Models\ResearchPost::factory(10)->create();
    }
}
