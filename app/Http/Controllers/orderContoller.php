<?php

namespace App\Http\Controllers;
use App\Models\order;

use Illuminate\Http\Request;

class orderContoller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = order::get();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dasboard::create([
            'invoice_number'=> $request->invoice_number,
            'details_order'=> $request->details_order,
            'customer_name'=>$request->customer_name,
            'fiscal_data'=>$request->fiscal_data,
            'delivery_address'=>$request->delivery_address,
            'status'=>$request->status,
            'extra_info'=>$request->extra_info,

        ]);
        return to_route('orders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
