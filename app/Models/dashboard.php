<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\order;
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
    
}