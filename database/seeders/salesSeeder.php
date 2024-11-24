<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\sales;

class salesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        sales::create([
            'sales_name'=>'Pedro Parker',
            'order_details'=>'no details added',
            'customer_details'=>'No details added'
        ]);
        sales::factory(10)->create();
    }
}