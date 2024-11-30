<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\purchasing;

class purchasingApiController
{
    public function index()
     {
         $purchasings = purchasing::all();
         
         return response()->json($purchasings);

     }
     public function show(string $id)
     {
         $purchasign = purchasing::find($id);
         
         if(!$purchasign)
         return response()->json([
            'message' => 'Category not found',
            404
         ]);
         return response()->json($purchasign);
     }
}
