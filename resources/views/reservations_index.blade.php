@extends('layout')

@section('title', 'Liste des Voitures')

@section('content')
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liste des réservations</title>
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

            table {
                width: 100%;
                border-collapse: collapse;
            }

            th,
            td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid #ccc;
            }

            th {
                background-color: #f0f0f0;
            color: #333;
            }

            .btn {
                background-color: #6c757d;
                color: #fff;
                padding: 5px 10px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 14px;
                text-decoration: none;
                float: right;
            }

            .btn:hover {
                background-color: #5a6268;
            }

            .create-reservation {
                display: inline-block;
                margin-bottom: 20px;
            }
        </style>
    </head>

    <body>

        <div class="container">
            <h2>Liste des réservations</h2>
            <a href="{{ route('reservations.create') }}" class="btn create-reservation">Créer Réservation</a>
            <table>
                <thead>
                    <tr>
                        <th>Client</th>
                        <th>Voiture</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->client->nom }} {{ $reservation->client->prénom }}</td>
                            <td>{{ $reservation->voiture->immatriculation }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
          
        </div>

    </body>

    </html>
@endsection
