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
        'delivery_address',
        'order_status',
        'extra_info',
        'photo_Loaded',
        'photo_Delivered_Order',
    ];
    
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function routeorder(){
        return $this->hasMany(routeorder::class, 'order_id');
    }
    public function warehouse(){
        return $this->belongsTo(warehouse::class);
    }
    public function purchasing(){
        return $this->belongsTo(purchasing::class);
    }
    

}
