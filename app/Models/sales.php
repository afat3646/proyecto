<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\order;
class sales extends Model
{
    use HasFactory;
    protected $fillable=[
        'sales_name',
        'order_details',
        'customer_details'
    ];
    
    public function orders(){
        return $this->belongsTo(order::class);
    }
}
