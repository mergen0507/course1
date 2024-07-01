<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Classroom;
use App\Models\Location;

class ClassroomSeeder extends Seeder
{
    public function run()
    {
        $locations = Location::all();

        Classroom::create(['name' => 'A1', 'location_id' => $locations->random()->id]);
        Classroom::create(['name' => 'A2', 'location_id' => $locations->random()->id]);
        Classroom::create(['name' => 'A3', 'location_id' => $locations->random()->id]);
        Classroom::create(['name' => 'B1', 'location_id' => $locations->random()->id]);
        Classroom::create(['name' => 'B2', 'location_id' => $locations->random()->id]);
        Classroom::create(['name' => 'B3', 'location_id' => $locations->random()->id]);
        Classroom::create(['name' => 'C1', 'location_id' => $locations->random()->id]);
        Classroom::create(['name' => 'C2', 'location_id' => $locations->random()->id]);
        Classroom::create(['name' => 'C3', 'location_id' => $locations->random()->id]);
        Classroom::create(['name' => 'D1', 'location_id' => $locations->random()->id]);
    }
}
