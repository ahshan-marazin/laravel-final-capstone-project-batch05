<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('pages.customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'contact_email' => 'required|email',
            'contact_phone' => 'required',
            'address' => 'required',
        ]);

        Customer::create(
            [
                'name' => $request->name,
                'contact_email' => $request->contact_email,
                'contact_phone' => $request->contact_phone,
                'address' => $request->address,
            ]
        );

        return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('pages.customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required',
            'contact_email' => 'required|email',
            'contact_phone' => 'required',
            'address' => 'required',
        ]);

        $customer->update(
            [
                'name' => $request->name,
                'contact_email' => $request->contact_email,
                'contact_phone' => $request->contact_phone,
                'address' => $request->address,
            ]
        );

        return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully.');
    }
}
