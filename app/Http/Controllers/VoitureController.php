<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voiture;

class VoitureController extends Controller
{
    public function index()
    {
        $voitures = Voiture::all();
        return view('voitures_index', compact('voitures'));
    }

    public function create()
    {
        // Code pour afficher le formulaire de création d'une voiture
       return view('voitures_create');
    }

      // Enregistrer une nouvelle voiture
      public function store(Request $request)
      {
      
          // Stocker l'image dans le dossier public
          $imagePath = $request->file('image')->store('images', 'public');
  
          // Créer une nouvelle instance de Voiture
          $voiture = new Voiture();
          $voiture->immatriculation = $request->input('immatriculation');
          $voiture->num_assurance = $request->input('num_assurance');
          $voiture->kilometrage = $request->input('kilometrage');
          $voiture->date_debut_location = $request->input('date_debut_location');
          $voiture->date_fin_location = $request->input('date_fin_location');
          $voiture->image = $imagePath;
          
          // Enregistrer la nouvelle voiture dans la base de données
          $voiture->save();
  
          // Rediriger vers la liste des voitures avec un message de succès
          return redirect()->route('voitures.index')
              ->with('success', 'Voiture créée avec succès.');
      }

    public function show($id)
    {
        // Code pour afficher les détails d'une voiture spécifique
        $voiture = Voiture::find($id);
        return view('voitures_show', compact('voiture'));
    }

    public function edit($id)
    {
        // Code pour afficher le formulaire de modification d'une voiture
        $voiture = Voiture::find($id);
        return view('voitures_edit', compact('voiture'));
    }

    public function update(Request $request, $id)
    {
        // Code pour valider et mettre à jour les données d'une voiture existante
        $voiture = Voiture::find($id);
        $voiture->immatriculation = $request->input('immatriculation');
        $voiture->num_assurance = $request->input('num_assurance');
        $voiture->kilometrage = $request->input('kilometrage');
        $voiture->date_debut_location = $request->input('date_debut_location');
        $voiture->date_fin_location = $request->input('date_fin_location');
        $voiture->save();

        return redirect('/voitures');
    }

    public function destroy($id)
    {
        // Code pour supprimer une voiture
        $voiture = Voiture::find($id);
        $voiture->delete();

        return redirect('/voitures');
    }

}
