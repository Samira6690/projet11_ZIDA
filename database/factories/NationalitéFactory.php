<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NationalitéFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomNationalité' => $this->faker->country

            //
        ];
    }
}
