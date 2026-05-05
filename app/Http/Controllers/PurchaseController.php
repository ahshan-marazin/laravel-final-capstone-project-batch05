<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\PurchaseItem;
use App\Models\InventoryTracker;


class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchases = Purchase::with('supplier', 'purchaseItems.product.category','purchaseItems.product.brand')->get();
        return view('pages.purchases.index', compact('purchases'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Supplier::all();
        $products = Product::all();
        return view('pages.purchases.create', compact('suppliers', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'supplier_id' => 'required|exists:suppliers,id',
            'purchase_date' => 'required|date',
            'product_id' => 'required|array',
            'product_id.*' => 'exists:products,id',
            'quantity' => 'required|array',
            'quantity.*' => 'integer|min:1',
            'cost_price' => 'required|array',
            'cost_price.*' => 'numeric|min:0',
            'selling_price' => 'required|array',
            'selling_price.*' => 'numeric|min:0',
            'expire_date' => 'nullable|array',
            'expire_date.*' => 'string|nullable',

        ]);

        $purchase = Purchase::create([
            'supplier_id' => $request->supplier_id,
            'purchase_date' => $request->purchase_date,
        ]);

        // Attach products to the purchase
        foreach ($request->product_id as $index => $productId) {
          PurchaseItem::create([
            'purchase_id' => $purchase->id, //foreign key to purchases table
            'product_id' => $productId,
            'quantity' => $request->quantity[$index],
            'cost_price' => $request->cost_price[$index],
            'selling_price' => $request->selling_price[$index],
            'expire_date' => $request->expire_date[$index] ?? null,
          ]);
        }

        foreach ($request->product_id as $index => $productId) {
            InventoryTracker::create([
                'product_id' => $productId,
                'quantity' => $request->quantity[$index],
                'type' => 'purchase',
            ]);
        } 

        return redirect()->route('purchases.create')->with('success', 'Purchase created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}
