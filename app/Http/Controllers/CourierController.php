<?php

namespace App\Http\Controllers;

use App\Models\Courier;
use Illuminate\Support\Str;

class CourierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('couriers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'sender_name' => 'required|string',
        'receiver_name' => 'required|string',
        'origin' => 'required|string',
        'destination' => 'required|string',
        'weight' => 'required|numeric',
        'rate' => 'required|numeric',               
        ]);
        $validated['tracking_number'] = strtoupper(Str::random(10)); // Generate tracking number
        $validated['status'] = 'Pending'; // Default status

        Courier::create($validated);

        return redirect()->route('couriers.index')->with('success', 'Courier added successfully!');
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
