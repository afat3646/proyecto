<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\warehouse;

class warehouseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $warehouses = Warehouse::all(); 
        return view('warehouse.index', compact('warehouses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('warehouse.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'materials' => 'required|string',
            'assigned_name' => 'required|string|max:255',
        ]);

       
        Warehouse::create($request->all());

        return redirect()->route('warehouses.index')->with('success', 'Warehouse entry created successfully!');
  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $warehouse = Warehouse::findOrFail($id);
        return view('warehouse.show', compact('warehouse'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $warehouse = Warehouse::findOrFail($id); 
        return view('warehouse.edit', compact('warehouse'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'materials' => 'required|string',
            'assigned_name' => 'required|string|max:255',
        ]);

        
        $warehouse = Warehouse::findOrFail($id);
        $warehouse->update($request->all());

        return redirect()->route('warehouses.index')->with('success', 'Warehouse entry updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $warehouse = Warehouse::findOrFail($id);
        $warehouse->delete();

        return redirect()->route('warehouses.index')->with('success', 'Warehouse entry deleted successfully!');

    }
}
