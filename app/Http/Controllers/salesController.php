<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sales;

class salesController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sales::all(); // Obtener todas las ventas
        return view('sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sales.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'sales_name' => 'required|string|max:255',
            'order_details' => 'required|string',
            'customer_details' => 'required|string',
        ]);

        Sales::create($request->all());

        return redirect()->route('sales.index')->with('success', 'Sale created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sale = Sales::findOrFail($id);
        return view('sales.show', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sale = Sales::findOrFail($id);
        return view('sales.edit', compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'sales_name' => 'required|string|max:255',
            'order_details' => 'required|string',
            'customer_details' => 'required|string',
        ]);

        $sale = Sales::findOrFail($id);
        $sale->update($request->all());

        return redirect()->route('sales.index')->with('success', 'Sale updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sale = Sales::findOrFail($id);
        $sale->delete();

        return redirect()->route('sales.index')->with('success', 'Sale deleted successfully.');

    }
}
