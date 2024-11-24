<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\order;
class warehouse extends Model
{
    use HasFactory;
    protected $fillable=[
        'materials',
        'assigned_name',
        'order_status'
    ];
   
    public function orders(){
        return $this->belongsTo(order::class);
    }
}
