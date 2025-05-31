<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clinic;

class ClinicSeeder extends Seeder
{
    public function run()
    {
        Clinic::factory()->count(10)->create();
    }
}
