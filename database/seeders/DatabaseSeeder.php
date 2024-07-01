<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            LocationSeeder::class,
            ClassroomSeeder::class,
            BranchSeeder::class,
            TeacherSeeder::class,
            StudentSeeder::class,
            LessonSeeder::class,
            RegistrationSeeder::class,
        ]);
    }
}
