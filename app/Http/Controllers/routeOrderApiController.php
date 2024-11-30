<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\routeorder;
class routeOrderApiController
{
    public function index()
     {
         $routesorders = routeorder::all();
         
         return response()->json($categories);

     }
     public function show(string $id)
     {
         $category = routeorder::find($id);
         
         if(!$category)
         return response()->json([
            'message' => 'Category not found',
            404
         ]);
         return response()->json($category);
     }
}
