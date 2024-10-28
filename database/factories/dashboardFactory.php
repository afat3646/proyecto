<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class dashboardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_list'=>fake()->realText(200,5),
            'Customer'=>fake()->name(),
            'Photos_delivered' => fake()->randomElement(['Delivered', 'Not delivered']),
            'Sales'=>fake()->name(),
            'order_status'=>fake()->randomElement(['In progres','Delivered','Delayed'])

        ];
    }
}
