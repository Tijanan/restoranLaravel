<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menadzer;

class MenadzerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menadzer::factory()->count(60)->create();
    }
}
