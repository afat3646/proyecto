<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\dashboard;

class dashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        dashboard::create([
            'order_list'=>'order 1, order 2, order 4, order 5',
            'Customer'=> 'Luciana star',
            'Photos_delivered'=>'2 photos was delivered',
            'Sales'=>'Michell johanson',
            'order_status'=>'Active, in progress'

        ]);
        dashboard::factory(10)->create();
    }
}
