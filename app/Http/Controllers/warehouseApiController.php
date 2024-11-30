<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\warehouse;
class warehouseApiController
{
    public function index()
    {
        $warehouses = warehouse::all();
        
        return response()->json($warehouses);

    }
    public function show(string $id)
    {
        $warehouse = warehouse::find($id);
        
        if(!$warehouse)
        return response()->json([
           'message' => 'Category not found',
           404
        ]);
        return response()->json($warehouse);
    }
}
