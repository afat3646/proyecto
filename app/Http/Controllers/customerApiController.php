<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
class customerApiController
{
    public function index()
     {
         $customers = customer::all();
         
         return response()->json($customers);

     }
     public function show(string $id)
     {
         $customer = customer::find($id);
         
         if(!$customer)
         return response()->json([
            'message' => 'Category not found',
            404
         ]);
         return response()->json($customer);
     }
}
