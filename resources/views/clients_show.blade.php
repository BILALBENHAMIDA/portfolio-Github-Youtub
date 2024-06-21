
<!-- liste_voitures.blade.php -->

@extends('layout')

@section('title', 'Liste des Voitures')

@section('content')
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Détails du client</title>
    <style>
        /* styles.css */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #555;
        }

        .details {
            margin-bottom: 20px;
        }

        .details label {
            font-weight: bold;
        }

        .details p {
            margin: 0;
        }

        .btn-back {
            padding: 10px 20px;
            background-color: #008CBA;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-back:hover {
            background-color: #005f80;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Détails du client</h1>
        <div class="details">
            <label>ID :</label>
            <p>{{ $client->id }}</p>
        </div>
        <div class="details">
            <label>Nom :</label>
            <p>{{ $client->nom }}</p>
        </div>
        <div class="details">
            <label>Prénom :</label>
            <p>{{ $client->prénom }}</p>
        </div>
        <div class="details">
            <label>Numéro de permis :</label>
            <p>{{ $client->num_permis }}</p>
        </div>
        <div class="details">
            <label>Date de création :</label>
            <p>{{ $client->created_at }}</p>
        </div>
        <div class="details">
            <label>Date de modification :</label>
            <p>{{ $client->updated_at }}</p>
        </div>
        <button class="btn-back" onclick="window.history.back()">Retour</button>
    </div>

</body>

</html>
@endsection