<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\order;
class customer extends Model
{
    use HasFactory;
    protected $fillable=[
        'customer_name',
        'fiscal_Data',

    ];
   public function orders(){
    return $this->hasMany(order::class);
   }
}
