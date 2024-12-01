<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\routeorder;
use App\Models\order;
class routeorder extends Model
{
    use HasFactory;
    protected $fillable=[
        'route_status',
        'order_id',
        'route_name',
    ];
    
    public function orders(){
        return $this->belongsTo(order::class);
    }
}
