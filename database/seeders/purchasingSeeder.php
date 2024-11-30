<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\purchasing;
class purchasingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        purchasing::create([
            'purchase_order_number'=> '19HN34H',
        
            'purchase_details'=>'10tn grave',
            'supplier_name'=>'moztezuma'


        ]);
        purchasing::factory(10)->create();
    }
}
