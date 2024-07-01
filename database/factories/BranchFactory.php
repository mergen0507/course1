<?php

// database/factories/BranchFactory.php

namespace Database\Factories;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Factories\Factory;

class BranchFactory extends Factory
{
    protected $model = Branch::class;

    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Beginner', 'Elementary', 'Pre-intermediate', 'Intermediate', 'Upper-intermediate']),
        ];
    }
}

