<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function listar()
    {
        $clients = Client::orderBy('id', 'desc')->get();
        return view('clientes.listar', compact('clients'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $client = new Client();

        $client->codigo = $request->codigo;
        $client->num_social = $request->num_social;
        $client->telefono = $request->telefono;
        $client->domicilio = $request->domicilio;
        
        $client->save();

        return redirect()->route('client.listar');
    }

    public function show(Client $client)
    {
        return view('clientes.show', compact('client'));
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.listar');
    }

    public function edit(Client $client)
    {
        return view('clientes.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $client->codigo = $request->codigo;
        $client->num_social = $request->num_social;
        $client->telefono = $request->telefono;
        $client->domicilio = $request->domicilio;
        $client->save();
        return redirect()->route('client.listar');
    }
}
