<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Order::query();

        if ($request->filled('order_status')) {
            $query->where('order_status', $request->order_status);
        }
        if ($request->filled('date')) {
            $query->whereDate('created_at', $request->date);
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
            'fiscal_data' => 'nullable|string|max:255',
            'delivery_address' => 'required|string|max:255',
            'order_status' => 'required|string|in:ordered,in_process,in_route,delivered',
            'extra_info' => 'nullable|string',
            'photo_Loaded' => 'nullable|string|max:255',
            'photo_Delivered_Order' => 'nullable|string|max:255',
        ]);

        Order::create($validated);

        return redirect('/orders')->with('success', 'Order created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = Order::findOrFail($id);
        return view('orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'invoice_number' => 'required|string|max:255',
            'details_order' => 'required|string|max:255',
            'fiscal_data' => 'nullable|string|max:255',
            'delivery_address' => 'required|string|max:255',
            'order_status' => 'required|string|in:ordered,in_process,in_route,delivered',
            'extra_info' => 'nullable|string',
            'photo_Loaded' => 'nullable|string|max:255',
            'photo_Delivered_Order' => 'nullable|string|max:255',
        ]);

        $order = Order::findOrFail($id);
        $order->update($validatedData);

        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }

    /**
     * Update the status of an order.
     */
    public function updateStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'order_status' => 'required|string|in:ordered,in_process,in_route,delivered',
        ]);

        $order = Order::findOrFail($id);
        $order->update(['order_status' => $validated['order_status']]);

        return redirect()->back()->with('success', 'Order status updated successfully.');
    }

    /**
     * Upload a photo related to the order.
     */
    public function uploadPhoto(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('uploads', 'public');

            if ($order->order_status === 'in_route') {
                $order->update(['photo_Loaded' => $path]);
            } elseif ($order->order_status === 'delivered') {
                $order->update(['photo_Delivered_Order' => $path]);
            }
        }

        return redirect()->back()->with('success', 'Photo uploaded successfully.');
    }

    /**
     * Archive an order by changing its status to 'archived'.
     */
    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);
        $order->update(['order_status' => 'archived']);

        return redirect()->route('orders.index')->with('success', 'Order archived successfully.');
    }

    /**
     * Restore an archived order.
     */
    public function restore($id)
    {
        $order = Order::where('id', $id)->where('order_status', 'archived')->firstOrFail();
        $order->update(['order_status' => 'ordered']);

        return redirect()->route('orders.index')->with('success', 'Order restored successfully.');
    }
}