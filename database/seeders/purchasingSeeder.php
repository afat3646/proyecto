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
            'worker_name'=>'Alan',
            'Order_details'=>'Delivered on my construction site'
        ]);
        purchasing::factory(10)->create();
    }
}
