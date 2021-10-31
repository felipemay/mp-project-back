<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Orders::all();
        return response()->json($orders);
    }

    public function store(Request $request)
    {
        //val
        $request->validate([
            'product_name' => 'required',
            'price' => 'required',
        ]);

        //save
        $orders = Orders::create([
            'product_name' => $request->product_name,
            'price' => $request->price,
        ]);

        return response()->json($orders);
    }
}
