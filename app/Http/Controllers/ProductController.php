<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products= Product::with(['category', 'brand'])->get();
        return view('pages.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('pages.products.create', compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'cost_price' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5192',
        ]);


        // Handle file upload code starts here
        if ($request->hasFile('image')) {

           $imageFile = $request->file('image'); //hf8uzYEDYOlEJqDWXIjvK73SOnnu7oj9KoiqToZV.jpg
           $imageFileName = time() . '_' . $imageFile->getClientOriginalName(); //1697059200_hf8uzYEDYOlEJqDWXIjvK73SOnnu7oj9KoiqToZV.jpg
           $imagePath = Storage::disk('public')->putFileAs('product_images', $imageFile, $imageFileName);
           
        } else {
            $imagePath = null;
        }
        // Handle file upload code ends here


        // Generate SKU code starts here
        $lastProduct = Product::latest()->first();
        if ($lastProduct) {
            $lastSku = $lastProduct->sku;
            $lastSkuNumber = (int) substr($lastSku, 3); // Assuming SKU format is "SKU0001"
            $newSkuNumber = $lastSkuNumber + 1;
            $newSku = 'SKU' . str_pad($newSkuNumber, 4, '0', STR_PAD_LEFT);
        } else {
            $newSku = 'SKU0001';
        }

        // Generate SKU code ends here
        

        // Store product data in the database code starts here
        Product::create([
            'sku' => $newSku,
            'name' => $request->name,
            'description' => $request->description,
            'cost_price' => $request->cost_price,
            'selling_price' => $request->selling_price,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'image' => $imagePath,
        ]);

        // Store product data in the database code ends here
       
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
