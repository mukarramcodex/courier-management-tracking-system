<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index()
{
    $couriers = \App\Models\Courier::latest()->paginate(10); // You can adjust pagination

    return view('couriers.index', compact('couriers'));
}

}
