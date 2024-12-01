<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\routeorder;

class routeOrderController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $routeOrders = routeOrder::all();
        return view('routeOrder.index', compact('routeOrders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('routeorder.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'order_number' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'details' => 'required|string',
        ]);

        RouteOrder::create($validatedData);

        return redirect()->route('routeOrder.index')->with('success', 'Route order created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $routeOrder = routeOrder::findOrFail($id);
        return view('routeOrder.show', compact('routeOrder'));
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
            'order_number' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'details' => 'required|string',
        ]);

        $routeOrder = routeOrder::findOrFail($id);
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
