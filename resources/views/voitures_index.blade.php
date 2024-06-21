@extends('layout')

@section('title', 'Liste des Voitures')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des Voitures</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
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

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 10px;
            text-align: center;
            vertical-align: middle;
            border: 1px solid #ccc;
        }

        .table th {
            background-color: #f0f0f0;
            color: #333;
        }

        .table td img {
            max-width: 100px;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .btn-container {
            display: flex;
            justify-content: center;
        }

        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin: 3px;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 4px;
            color: #fff;
        }

        .btn.btn-info {
            background-color: #5bc0de;
            border-color: #46b8da;
        }

        .btn.btn-primary {
            background-color: #5cb85c;
            border-color: #4cae4c;
        }

        .btn.btn-danger {
            background-color: #d9534f;
            border-color: #d43f3a;
        }

        .btn-sm {
            padding: 5px 10px;
            font-size: 12px;
        }

        .btn-create {
            background-color: #6c757d;
            border-color: #6c757d;
            float: right;
            margin-bottom: 20px;
            color: #fff;
            text-decoration: none;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 400;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Liste des Voitures</h2>
        <a href="{{ route('voitures.create') }}" class="btn btn-create">Créer Voiture</a>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Immatriculation</th>
                        <th scope="col">Numéro d'Assurance</th>
                        <th scope="col">Kilométrage</th>
                        <th scope="col">Date de début de location</th>
                        <th scope="col">Date de fin de location</th>
                        <th scope="col">Image</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($voitures as $voiture)
                    <tr>
                        <td>{{ $voiture->immatriculation }}</td>
                        <td>{{ $voiture->num_assurance }}</td>
                        <td>{{ $voiture->kilometrage }}</td>
                        <td>{{ $voiture->date_debut_location }}</td>
                        <td>{{ $voiture->date_fin_location }}</td>
                        <td>
                            @if ($voiture->image)
                            <img src="{{ asset($voiture->image) }}" alt="Image de la voiture" class="img-fluid voiture-image">
                            @else
                            Aucune image disponible
                            @endif
                        </td>
                        <td class="btn-container">
                            <a href="{{ route('voitures.show', $voiture->id) }}" class="btn btn-info btn-sm">Afficher</a>
                            <a href="{{ route('voitures.edit', $voiture->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                            <form action="{{ route('voitures.destroy', $voiture->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
@endsection
