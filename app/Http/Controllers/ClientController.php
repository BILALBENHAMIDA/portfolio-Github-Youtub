<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients_index', compact('clients'));
    }

    public function create()
    {
        return view('clients_create');
    }



    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('clients_show', compact('client'));
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('clients_edit', compact('client'));
    }

    public function update(Request $request, $id)
    {

        $client = Client::findOrFail($id);
        $client->nom = $request->input('nom');
        $client->prénom = $request->input('prénom');
        $client->num_permis = $request->input('num_permis');
        $client->save();
        return redirect()->route('clients.index')
            ->with('success', 'Client mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('clients.index')
            ->with('success', 'Client supprimé avec succès.');
    }
}
