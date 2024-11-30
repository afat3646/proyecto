<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sales;

class saleApiController
{
    public function index()
     {
         $sales = sales::all();
         
         return response()->json($sales);

     }
     public function show(string $id)
     {
         $sale = sales::find($id);
         
         if(!$sale)
         return response()->json([
            'message' => 'Category not found',
            404
         ]);
         return response()->json($sale);
     }
}
