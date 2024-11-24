<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class warehouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'materials' => implode(', ', fake()->words(3)),
            'assinged_name'=>fake()->name(),
            'order_status'=>fake()->randomElement(['In progres','Delivered','Delayed'])
        ];
    }
}
