
<!-- liste_voitures.blade.php -->

@extends('layout')

@section('title', 'Liste des Voitures')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Détails de la Voiture</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .card-text {
            color: #555;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .text-center {
            text-align: center;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 10px auto;
        }

        .no-image {
            color: #999;
            font-style: italic;
            text-align: center;
        }

        /* Ajoutez ce style à votre balise style ou à votre fichier CSS */
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            color: #fff;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Détails de la Voiture</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Immatriculation: {{ $voiture->immatriculation }}</h5>
                <p class="card-text">Numéro d'Assurance: {{ $voiture->num_assurance }}</p>
                <p class="card-text">Kilométrage: {{ $voiture->kilometrage }}</p>
                <p class="card-text">Date de début de location: {{ $voiture->date_debut_location }}</p>
                <p class="card-text">Date de fin de location: {{ $voiture->date_fin_location }}</p>
                <p class="card-text">Image:</p>
                <div class="text-center"> <!-- Ajoutez la classe text-center -->
                    @if ($voiture->image)
                        <img src="{{ asset($voiture->image) }}" alt="Image de la voiture" class="img-fluid">
                    @else
                        <p class="no-image">Aucune image disponible</p>
                    @endif
                    <!-- Modifiez le texte du bouton pour le rendre plus approprié -->
                    <a href="{{ route('reservations.create') }}" class="btn btn-primary">Réserver</a>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>
@endsection