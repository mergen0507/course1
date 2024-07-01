<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    public function run()
    {
        Location::create(['name' => 'Unwermag']);
        Location::create(['name' => 'Mir1']);
        Location::create(['name' => 'Anew']);
    }
}
