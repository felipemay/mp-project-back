<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Clients::all();
        return response()->json($clients);
    }

    public function store(Request $request)
    {
        //validação
        $request->validate([
            'name' => 'required',
            'cnpj' => 'required',
            'address' => 'required',
            'address_number' => 'required',
            'city' => 'required',
            'state' => 'required',
            'phone' => 'required',
        ]);

        //salvar db
        $clients = Clients::create([
            'name' => $request->name,
            'cnpj' => $request->cnpj,
            'address' => $request->address,
            'address_number' => $request->address_number,
            'city' => $request->city,
            'state' => $request->state,
            'phone' => $request->phone,
        ]);

        //retorna 
        return response()->json($clients);
    }

    public function update(Request $request, Clients $clients)
    {
        //validação
        $request->validate([
            'name' => 'required',
            'cnpj' => 'required',
            'address' => 'required',
            'address_number' => 'required',
            'city' => 'required',
            'state' => 'required',
            'phone' => 'required',
        ]);

        $clients->update([
            'name' => $request->name,
            'cnpj' => $request->cnpj,
            'address' => $request->address,
            'address_number' => $request->address_number,
            'city' => $request->city,
            'state' => $request->state,
            'phone' => $request->phone,
        ]);

        //retorna 
        return response()->json($clients);
    }

    public function destroy(Clients $clients)
    {
        $clients->delete();
        return response()->json($clients);
    }
}
