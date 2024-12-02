<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\routeorder;
use App\Models\order;

class routeOrderController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $routeOrders = routeOrder::with('order')->get(); 
        return view('routeOrder.index', compact('routeOrders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orders = order::all();
       
        return view('routeorder.create', compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'route_name' => 'required|string|max:255',
            'route_status' => 'required|string|in:Delayed,In progress,Delivered',
        ]);
    
        routeorder::create($validatedData);
    
        return redirect()->route('routeOrder.index')->with('success', 'Route order created successfully.');
    
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $orders = order::all(); 
        return view('routeorder.create', compact('orders')); 
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $routeOrder = RouteOrder::findOrFail($id);
        return view('routeorder.edit', compact('routeOrder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'route_name' => 'required|string|max:255',
            'route_status' => 'required|string|in:Delayed,In progress,Delivered',
        ]);
    
        $routeOrder = routeorder::findOrFail($id);
        $routeOrder->update($validatedData);
    
        return redirect()->route('routeOrder.index')->with('success', 'Route order updated successfully.');
    

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $routeOrder = routeOrder::findOrFail($id);
        $routeOrder->delete();

        return redirect()->route('routeOrder.index')->with('success', 'Route order deleted successfully.');

    }
}
