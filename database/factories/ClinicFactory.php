<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClinicFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'description' => $this->faker->sentence,
            'address' => $this->faker->address,
            'contact' => $this->faker->phoneNumber,
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
        ];
    }
}
