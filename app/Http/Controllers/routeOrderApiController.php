<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\routeorder;

class routeOrderApiController
{
    public function index()
     {
         $routesorders = routeorder::all();
         
         return response()->json($routesorders);

     }
     public function show(string $id)
     {
         $routeOrder = routeorder::find($id);
         
         if(!$routeOrder)
         return response()->json([
            'message' => 'Category not found',
            404
         ]);
         return response()->json($routeOrder);
     }
}
