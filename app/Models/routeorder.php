<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\order;
class routeorder extends Model
{
    use HasFactory;
    protected $fillable=[
        'route_status'
    ];
    
    public function orders(){
        return $this->belongsTo(order::class);
    }
}
