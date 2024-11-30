<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
class orderApiController
{
    public function index()
    {
        $orders = order::all();
        
        return response()->json($orders);

    }
    public function show(string $id)
    {
        $order = order::find($id);
        
        if(!$order)
        return response()->json([
           'message' => 'Category not found',
           404
        ]);
        return response()->json($order);
    }
}
