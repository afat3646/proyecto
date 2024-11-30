<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\customer;


class orderContoller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = order::query();

        if ($request->filled('status')) {
        $query->where('status', $request->status);
    }
        if ($request->filled('customer_id')) {
        $query->where('customer_id', $request->customer_id);
    }
    if ($request->filled('date')) {
        $query->whereDate('order_Date', $request->date);
    }

    $orders = $query->get();
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
        $validated = $request->validate([
            'invoice_number' => 'required|string|max:255',
            'details_order' => 'required|string',
            'customer_number' => 'required|exists:customers,customer_number',
            'fiscal_data' => 'required|string',
            'delivery_address' => 'required|string',
            'status' => 'required|string|in:ordered,in_process,in_route,delivered',
            'extra_info' => 'nullable|string',
        ]);
    
        order::create($validated);
    
        return redirect('/orders')->with('success', 'Order created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::with(['customer', 'warehouse', 'purchasing', 'routeorder'])->findOrFail($id);
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = order::findOrFail($id);
        return view('orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = order::findOrFail($id);

        $validated = $request->validate([
            'invoice_number' => 'required|string|max:255',
            'details_order' => 'required|string',
            'customer_name' => 'required|string|max:255',
            'fiscal_data' => 'required|string',
            'delivery_address' => 'required|string',
            'status' => 'required|string|in:ordered,in_process,in_route,delivered',
        ]);

        $order->update($validated);

        return redirect()->route('orders.index')->with('success', 'order updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function updateStatus(Request $request, $id)
    {
        
        $validated = $request->validate([
            'status' => 'required|string|in:ordered,in_process,in_route,delivered',
        ]);

    
        $order = Order::findOrFail($id);

        
        $order->update(['status' => $validated['status']]);

        return redirect()->back()->with('success', 'Order status updated successfully.');
    }
    public function uploadPhoto(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('uploads', 'public');
            
            if ($order->status === 'in_route') {
                $order->update(['photo_Loaded' => $path]);
            } elseif ($order->status === 'delivered') {
                $order->update(['photo_Delivered_Order' => $path]);
            }
        }

        return redirect()->back()->with('success', 'Photo uploaded successfully.');
    }
    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);
        $order->update(['status' => 'archived']);

        return redirect()->route('orders.index')->with('success', 'Order archived successfully.');

    }
    public function restore($id)
    {
        $order = Order::where('id', $id)->where('status', 'archived')->firstOrFail();
        $order->update(['status' => 'ordered']); 

        return redirect()->route('orders.index')->with('success', 'Order restored successfully.');
    }
}
