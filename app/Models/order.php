<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\customer;
use App\Models\routeorder;
use App\Models\warehouse;
use App\Models\purchasing;


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
    
    public function customer(){
        return $this->belongTo(customer::class);
    }
    public function routeorder(){
        return $this->hasOne(routeorder::class);
    }
    public function warehouse(){
        return $this->belongTo(warehouse::class);
    }
    public function purchasing(){
        return $this->belongTo(purchasing::class);
    }
    

}
