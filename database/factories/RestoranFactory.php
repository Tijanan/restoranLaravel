<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RestoranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->company(),
            'adresa' => $this->faker->streetAddress(),
            'grad' => $this->faker->city(),
            'kapacitet' => $this->faker->numberBetween($min = 10, $max = 1000)
        ];
    }
}
