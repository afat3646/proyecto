<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\order;
use App\Models\customer;
use App\Models\warehouse;

class orderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = customer::first() ?? customer::factory()->create();
        $warehouse = warehouse::first() ?? warehouse::factory()->create();
        order::create([
            'invoice_number' => '1975673JDH',
            'details_order' => '10 Tn of grave to be delivered on a week',
            'delivery_address' => 'P Sherman calle walaby no c Sidney',
            'fiscal_data'=> 'test',
            'order_status' => 'Ordered',
            'extra_info' => 'Delivery scheduled for next Monday.',
            'photo_Loaded' => 'Loaded',
            'photo_Delivered_Order' => 'Not Loaded',
            
        ]);
        order::factory(10)->create();
    }
}
