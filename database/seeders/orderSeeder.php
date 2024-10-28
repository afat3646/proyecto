<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\order;

class orderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        order::create([
            'invoice_number'=>'1975673JDH',
            'details_order'=>'10 Tn of grave to delivered on a week',
            'customer_name'=>'Alan',
            'fiscal_data'=>'88JFNN1H82N',
            'delivery_address'=>' P Sherman calle walaby no c Sidney',
            'status'=>'Active, in progres',
            'extra_info'=>'The order will be received by our workers',
            'photo_Loaded'=>'yes',
            'photo_Delivered_Order'=>'no, status is in progress'

        ]);
    }
}
