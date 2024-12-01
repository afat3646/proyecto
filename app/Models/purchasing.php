<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\order;
class purchasing extends Model
{
    use HasFactory;
    protected $fillable = [
        'supplier_name',
        'purchase_details',
        'purchase_order_number',
    ];
    public function orders(){
        return $this->belongsTo(order::class);
    }
}
