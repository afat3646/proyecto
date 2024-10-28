<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\warehouse;


class warehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        warehouse::create([
            'materials'=> 'concrate, Gravel, Wood',
            'assinged_name'=>'Alan',
            'order_status'=>'Delivered'
        ]);
    }
}
