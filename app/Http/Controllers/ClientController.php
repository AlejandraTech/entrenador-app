<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Auth::user()->clients()->paginate(10);
        return view('home', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:clients',
            'phone' => 'nullable|string|max:20',
            'notes' => 'nullable|string',
        ]);

        $client = Auth::user()->clients()->create($validatedData);

        return redirect()->route('clients.show', $client)->with('success', 'Cliente creado exitosamente.');
    }

    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:clients,email,' . $client->id,
            'phone' => 'nullable|string|max:20',
            'notes' => 'nullable|string',
        ]);

        $client->update($validatedData);

        return redirect()->route('clients.show', $client)->with('success', 'Cliente actualizado exitosamente.');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('home')->with('success', 'Cliente eliminado exitosamente.');
    }
}
