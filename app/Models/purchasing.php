<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\order;
class purchasing extends Model
{
    use HasFactory;
    protected $fillable = [
        'worker_name',
        'order_details',
        'pickup_order'
    ];
    public function orders(){
        return $this->belongsTo(order::class);
    }
}
