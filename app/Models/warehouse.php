<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class warehouse extends Model
{
    use HasFactory;
    protected $fillable=[
        'materials',
        'assigned_name',
        'order_status'
    ];
    public function dashboard(){
        return $this->belongsTo(dashboard::class);
    }
    public function orders(){
        return $this->belongsTo(order::class);
    }
}
