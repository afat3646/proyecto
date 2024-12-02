<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\routeorder;

class routeOrderApiController
{
    public function index()
    {
        $routesOrders = routeorder::all();
        return response()->json($routesOrders);
    }

    public function show(string $id)
    {
        $routeOrder = routeorder::find($id);

        if (!$routeOrder) {
            return response()->json([
                'message' => 'Route Order not found'
            ], 404);
        }

        return response()->json($routeOrder);
    }

    public function searchByRouteName(string $routeName)
    {
        try {
            // Busca la ruta por el nombre
            $routeOrder = routeorder::where('route_name', $routeName)->first();

            if (!$routeOrder) {
                return response()->json([
                    'message' => 'Route Order not found'
                ], 404);
            }

            return response()->json($routeOrder);
        } catch (\Exception $e) {
            // Devuelve un error 500 si ocurre una excepción
            return response()->json([
                'message' => 'Server Error',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
