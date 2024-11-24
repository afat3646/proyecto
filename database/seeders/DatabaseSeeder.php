<?php

namespace Database\Seeders;

use App\Models\customer;
use App\Models\dashboard;
use App\Models\order;
use App\Models\purchasing;
use App\Models\routeorder;
use App\Models\sales;
use App\Models\User;
use App\Models\warehouse;
use Database\Factories\adminFactory;
use Database\Factories\customerFactory;
use Database\Factories\dashboardFactory;
use Database\Factories\orderFactory;
use Database\Factories\purchasingFactory;
use Database\Factories\routeorderFactory;
use Database\Factories\salesFactory;
use Database\Factories\UserFactory;
use Database\Factories\warehouseFactory;



// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this->call([
            
            customerSeeder::class,
            orderSeeder::class,
            dashboardSeeder::class,
            purchasingSeeder::class,
            salesSeeder::class,
            userSeeder::class,
            warehouseSeeder::class,
            routeorderSeeder::class,
        ]);
        
        $customer = customer::factory(5)->create();
        $dashboard = dashboard::factory(15)->create();
        $order = order:: factory(15)->create();
        $purchasing = purchasing:: factory(5)->create();
        $sales = sales:: factory(15)->create();
        $User = User::factory(15)->create();
        $warehouse = warehouse::factory(5)->create();
        $routeorder = routeorder:: factory(15)->create();
        
        
        
        
        
        
    }
}
