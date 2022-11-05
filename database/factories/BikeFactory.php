<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bike>
 */
class BikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $reference = $this->faker->unique()->word();

        return [
            'reference' => $reference,
            'slug' => Str::slug($reference, '-'),
            'serial_number' => $this->faker->unique()->word(),
        ];
    }
}
