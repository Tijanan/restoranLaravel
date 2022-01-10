<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kuvar;

class KuvarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kuvar::factory()->count(80)->create();
    }
}
