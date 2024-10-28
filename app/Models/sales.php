<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class sales extends Model
{
    use HasFactory;
    protected $fillable=[
        'sales_name',
        'order_details',
        'customer_details'
    ];
    public function dashboard(){
        return $this->belongsTo(dashboard::class);
    }
    public function orders(){
        return $this->belongsTo(order::class);
    }
}
