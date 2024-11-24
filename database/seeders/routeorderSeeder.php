<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\routeorder;

class routeorderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        routeorder::create([
            'route_name'=>'Route atlanta',
            'route_status'=>'In progress',
            'order_id' => 1,
        ]);
        routeorder::factory(10)->create();
    }
}
