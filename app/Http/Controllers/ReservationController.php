<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Client;
use App\Models\Voiture;
class ReservationController extends Controller
{
    public function create()
    {
        return view('reservations_create');
    }
    public function store(Request $request)
    {
      
        // Créer un nouveau client
        $client = new Client();
        $client->nom = $request->input('nom');
        $client->prénom = $request->input('prénom');
        $client->num_permis = $request->input('num_permis');
        $client->save();
        

        // Créer une nouvelle voiture
        $voiture = new Voiture();
        $voiture->immatriculation = $request->input('immatriculation');
        $voiture->num_assurance = $request->input('num_assurance');
        $voiture->kilometrage = $request->input('kilometrage');
        $voiture->date_debut_location = $request->input('date_debut');
        $voiture->date_fin_location = $request->input('date_fin');
        $voiture->save();
        

        // Créer une nouvelle réservation et associer le client et la voiture
        $reservation = new Reservation();
        $reservation->id_client = $client->id;
        $reservation->id_voiture = $voiture->id;
        $reservation->save();

        // Rediriger vers une page de confirmation ou une autre vue
        return redirect()->route('reservations.index',);
    }
    
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations_index', compact('reservations'));
    }
}
