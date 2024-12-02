<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\order;
class routeorder extends Model
{
    use HasFactory;
    protected $fillable=[
        'route_status',
        'route_name',
        'order_id'
    ];
    
    public function order() {
        return $this->belongsTo(order::class, 'order_id');
    }
}
