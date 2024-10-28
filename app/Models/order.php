<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class order extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice_number',
        'details_order',
        'customer_name',
        'fiscal_data',
        'order_Date',
        'delivery_address',
        'status',
        'extra_info',
        'photo_Loaded',
        'photo_Delivered_Order',
    ];
    public function dashboard(){
        return $this->belongsTo(dashboard::class);
    }
    public function orders(){
        return $this->hasmany(order::class);
    }
    public function sale(){
        return $this->hasmany(sales::class);
    }
    public function purchasings(){
        return $this->hasmany(purchasing::class);
    }
    public function routeorders(){
        return $this->hasmany(routeorder::class);
    }
    public function warehouses(){
        return $this->belongsTo(warehouse::class);
    }
    

}
