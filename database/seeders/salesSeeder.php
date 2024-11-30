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
            'customer_details'=>'no info required',
            'order_details'=>'no details added',
        ]);
        sales::factory(10)->create();
    }
}
