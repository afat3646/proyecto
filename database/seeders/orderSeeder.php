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
            'invoice_number'=>'1975673JDH',
            'details_order'=>'10 Tn of grave to delivered on a week',
            'customer_number' => $customer->customer_number,
            'fiscal_data'=>'88JFNN1H82N',
            'delivery_address'=>' P Sherman calle walaby no c Sidney',
            'status'=>'Active, in progress',
            'extra_info'=>'The order will be received by our workers',
            'photo_Loaded'=>'yes',
            'photo_Delivered_Order'=>'no, status is in progress',
            'assinged_name' => $warehouse->id,

        ]);
        order::factory(10)->create();
    }
}
