<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\customer;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        customer::create([
            'customer_name'=>'Michelle Johanson',
            'fiscal_Data'=>'HAU1082ND',
        

        ]);
        customer::factory(10)->create();
    }
    
}
