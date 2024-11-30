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
        'customer_number',
        'fiscal_data',
        'order_Date',
        'delivery_address',
        'status',
        'extra_info',
        'assinged_name',
        'photo_Loaded',
        'photo_Delivered_Order',
    ];
    
    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_number', 'customer_number');
    }
    public function routeorder(){
        return $this->hasOne(routeorder::class);
    }
    public function warehouse(){
        return $this->belongsTo(warehouse::class);
    }
    public function purchasing(){
        return $this->belongsTo(purchasing::class);
    }
    

}
