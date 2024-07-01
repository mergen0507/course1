<?php

namespace Database\Factories;

use App\Models\Registration;
use App\Models\Lesson;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrationFactory extends Factory
{
    protected $model = Registration::class;

    public function definition()
    {
        return [
            'lesson_id' => Lesson::factory(),
            'student_id' => Student::factory(),
            'price' => $this->faker->randomFloat(2, 50, 200),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
