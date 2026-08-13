<?php

namespace Database\Factories;

use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<product>
 */
class productfactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(3,true),
            'description' => $this->faker->sentence(12),
            'price' => $this->faker->randomfloat(2,10,1000),
            'imnage' => 'products/default.png',
            'stock' => $this->faker->numberBetween(0,100),
        ];
    }
}
