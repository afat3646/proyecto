<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\purchasing;


class purchasingController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchasings = purchasing::all();
        return view('purchasing.index', compact('purchasings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('purchasing.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'purchase_order_number' => 'required|string|max:255',
            'supplier_name' => 'required|string|max:255',
            'purchase_details' => 'required|string',
        ]);

        Purchasing::create($validatedData);

        return redirect()->route('purchasings.index')->with('success', 'Purchase record created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $purchasing = purchasing::findOrFail($id);
        return view('purchasing.show', compact('purchasing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $purchasing = purchasing::findOrFail($id);
        return view('purchasing.edit', compact('purchasing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'purchase_order_number' => 'required|string|max:255',
            'supplier_name' => 'required|string|max:255',
            'purchase_details' => 'required|string',
        ]);

        $purchasing = purchasing::findOrFail($id);
        $purchasing->update($validatedData);

        return redirect()->route('purchasings.index')->with('success', 'Purchase record updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $purchasing = purchasing::findOrFail($id);
        $purchasing->delete();

        return redirect()->route('purchasings.index')->with('success', 'Purchase record deleted successfully.');

    }
}
