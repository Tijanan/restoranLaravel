<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Menadzer;

class KuvarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'kuhinja' =>  $this->faker->randomElement($array = array('domaća', 'italijanska', 'francuska', 'japanska', 'kineska', 'indijska', 'turska')),
            'plata' => $this->faker->numberBetween($min = 40000, $max = 450000),
            'menadzer_id' => Menadzer::factory()
        ];
    }
}
