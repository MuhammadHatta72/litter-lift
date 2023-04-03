<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trash>
 */
class TrashFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'weight' => $this->faker->randomFloat(2, 0, 100),
            'proof_of_weight' => $this->faker->imageUrl(),
            'message' => $this->faker->sentence(),
            'date' => $this->faker->date(),
        ];
    }
}
