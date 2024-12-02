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
            'assigned_name'=>'Alan',
            
        ]);
        warehouse::factory(10)->create();
    }
}
