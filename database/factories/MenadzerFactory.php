<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Restoran;

class MenadzerFactory extends Factory
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
            'strucna_sprema' => $this->faker->randomElement($array = array('III', 'IV', 'V', 'VI', 'VII')),
            'restoran_id' => Restoran::factory()
        ];
    }
}
