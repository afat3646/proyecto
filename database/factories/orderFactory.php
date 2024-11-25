<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\customer;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class orderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice_number' => fake()->bothify('??#####'),
            'customer_name'=> fake()->name(),
            'details_order'=>fake()->text(100),
            'fiscal_data' => fake()->bothify('??##??##'),
            'delivery_address'=>fake()->text(100),
            'status'=>fake()->randomElement(['In progress','Delivered','Delayed']),
            'extra_info'=>fake()->text(100),
            'photo_Loaded'=>fake()->randomElement(['Loaded', 'Not Loaded']),
            'photo_Delivered_Order' => fake()->randomElement(['Delivered', 'Not delivered']),
        ];
    }
}
