<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class purchasing extends Model
{
    use HasFactory;
    protected $fillable = [
        'worker_name',
        'order_details',
        'pickup_order'
    ];
    public function dashboard(){
        return $this->belongsTo(dashboard::class);
    }

    public function orders(){
        return $this->belongsTo(order::class);
    }
}
