<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class purchasingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'purchase_details'=>fake()->realText(250,5),
            'supplier_name'=>fake()->name(),
            'purchase_order_number'=> fake()->bothify('??##??##'),
            'purchase_details'=>fake()->realText(250,5)

            ];
        
    }
}
