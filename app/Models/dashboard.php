<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class dashboard extends Model
{
    use HasFactory;
    protected $fillable=[
        'order_list',
        'Customer',
        'Photos_delivered',
        'Sales',
        'order_status'
    ];

    public function orders(){
        return $this->hasmany(order::class);
    }
    public function customers(){
        return $this->hasmany(customer::class);
    }
    public function purchasings(){
        return $this->hasmany(purchasing::class);
    }
    public function routeorders(){
        return $this->hasmany(routeorder::class);
    }
    public function sale(){
        return $this->hasmany(sales::class);
    }
    public function user(){
        return $this->hasmany(User::class);
    }
    public function warehouses(){
        return $this->hasmany(warehouse::class);
    }
    
}