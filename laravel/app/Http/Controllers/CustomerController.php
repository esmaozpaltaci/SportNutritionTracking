<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customers.list', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Customer::create([
            'name' => 'Emre',
            'surname' => 'Akadal',
            'birthYear' => '1988',
            'gender' => 'Male',
            'address' => 'Beylikdüzü'
        ]);

        Customer::create([
            'name' => 'Hakan Umut',
            'surname' => 'Akadal',
            'birthYear' => '2016',
            'gender' => 'Male',
            'address' => 'Fatih'
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $customer->update([
            'address' => 'Beyazıt'
        ]);

        dd(Customer::all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
