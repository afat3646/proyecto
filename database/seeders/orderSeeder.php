<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\order;
use App\Models\customer;

class orderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = customer::first() ?? customer::factory()->create();
        order::create([
            'invoice_number'=>'1975673JDH',
            'details_order'=>'10 Tn of grave to delivered on a week',
            'customer_name' => $customer->customer_name,
            'fiscal_data'=>'88JFNN1H82N',
            'delivery_address'=>' P Sherman calle walaby no c Sidney',
            'status'=>'Active, in progress',
            'extra_info'=>'The order will be received by our workers',
            'photo_Loaded'=>'yes',
            'photo_Delivered_Order'=>'no, status is in progress',
            'customer_id' => $customer->id,

        ]);
        order::factory(10)->create([
            'customer_id' => $customer->id,
        ]);
    }
}
