<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class routeorderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'route_status'=>fake()->randomElement(['In progress','Delivered','Delayed']),
            'order_id' => fake()->randomDigitNotNull(),
            'route_name'=>fake()->name(),
        ];
    }
}
