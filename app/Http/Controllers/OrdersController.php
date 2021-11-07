<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $order = Orders::all();
        return response()->json($order);
    }

    public function store(Request $request)
    {
        //val
        $request->validate([
            'product_name' => 'required',
            'price' => 'required',
        ]);

        //save
        $order = Orders::create([
            'product_name' => $request->product_name,
            'price' => $request->price,
        ]);

        return response()->json($order);
    }
}
