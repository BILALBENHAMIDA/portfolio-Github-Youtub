<!-- liste_voitures.blade.php -->

@extends('layout')

@section('title', 'Liste des Voitures')

@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une nouvelle réservation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Créer une nouvelle réservation</h2>
        <form action="{{ route('reservations.store') }}" method="POST">
            @csrf
            <div>
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom">
            </div>
            <div>
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prénom">
            </div>
            <div>
                <label for="num_permis">Numéro de permis:</label>
                <input type="text" id="num_permis" name="num_permis">
            </div>
            <!-- Champs pour la voiture -->
            <div>
                <label for="immatriculation">Immatriculation:</label>
                <input type="text" id="immatriculation" name="immatriculation">
            </div>
            <div>
                <label for="num_assurance">Numéro d'assurance:</label>
                <input type="text" id="num_assurance" name="num_assurance">
            </div>
            <div>
                <label for="kilometrage">Kilométrage:</label>
                <input type="text" id="kilometrage" name="kilometrage">
            </div>
            <div>
                <label for="date_debut">Date de début de location:</label>
                <input type="date" id="date_debut" name="date_debut">
            </div>
            <div>
                <label for="date_fin">Date de fin de location:</label>
                <input type="date" id="date_fin" name="date_fin">
            </div>
            <button type="submit">Enregistrer</button>
        </form>
    </div>

</body>
</html>
@endsection
