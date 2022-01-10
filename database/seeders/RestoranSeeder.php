<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restoran;

class RestoranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restoran::factory()->count(25)->create();
    }
}
