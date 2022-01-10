<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\KuvarSeeder;
use Database\Seeders\RestoranSeeder;
use Database\Seeders\MenadzerSeeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $kuvarSeeder = new KuvarSeeder();
        $kuvarSeeder->run();

        $restoranSeeder = new RestoranSeeder();
        $restoranSeeder->run();

        $menadzerSeeder = new MenadzerSeeder();
        $menadzerSeeder->run();
    }
}
