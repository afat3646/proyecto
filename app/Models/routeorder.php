<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class routeorder extends Model
{
    use HasFactory;
    protected $fillable=[
        'route_status'
    ];
    public function dashboard(){
        return $this->belongsTo(dashboard::class);
    }
    public function orders(){
        return $this->belongsTo(order::class);
    }
}
