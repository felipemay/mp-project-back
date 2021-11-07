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

    public function show(Request $request, Clients $client)
    {
        return response()->json($client);
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

    public function update(Request $request, Clients $client)
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

        $client->update([
            'name' => $request->name,
            'cnpj' => $request->cnpj,
            'address' => $request->address,
            'address_number' => $request->address_number,
            'city' => $request->city,
            'state' => $request->state,
            'phone' => $request->phone,
        ]);

        //retorna 
        return response()->json($client);
    }

    public function destroy(Clients $client)
    {
        $client->delete();
        return response()->json($client);
    }
}
