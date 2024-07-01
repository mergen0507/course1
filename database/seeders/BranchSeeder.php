<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Branch;

class BranchSeeder extends Seeder
{
    public function run()
    {
        Branch::create(['name' => 'Beginner']);
        Branch::create(['name' => 'Elementary']);
        Branch::create(['name' => 'Pre-intermediate']);
        Branch::create(['name' => 'Intermediate']);
        Branch::create(['name' => 'Upper-intermediate']);
        Branch::create(['name' => 'Advanced']);
    }
}
