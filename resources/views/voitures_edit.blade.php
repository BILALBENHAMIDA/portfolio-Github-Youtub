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
        <title>Document</title>
        <style>
            /* Container Styles */
            .container.form-container {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                background-color: #f9f9f9;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            /* Form Styles */
            .car-form {
                display: flex;
                flex-direction: column;
            }

            /* Form Group Styles */
            .form-group {
                margin-bottom: 15px;
            }

            /* Label Styles */
            .form-group label {
                font-weight: bold;
                margin-bottom: 5px;
                display: block;
            }

            /* Input Styles */
            .form-control {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 16px;
                box-sizing: border-box;
            }

            .form-control-file {
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 16px;
                box-sizing: border-box;
            }

            /* Button Styles */
            .btn.btn-primary {
                padding: 10px 20px;
                background-color:red;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
                transition: background-color 0.3s ease;
            }

            .btn.btn-primary:hover {
                background-color: rgb(154, 15, 15);
            }
        </style>
    </head>

    <body>
        <div class="container form-container">
            <h2>Créer une nouvelle voiture</h2>
            <form action="{{ route('voitures.update',$voiture->id) }}" method="POST" enctype="multipart/form-data" class="car-form">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="immatriculation">Immatriculation:</label>
                    <input type="text" id="immatriculation" name="immatriculation" value={{$voiture->immatriculation}} class="form-control">
                </div>
                <div class="form-group">
                    <label for="num_assurance">Numéro d'assurance:</label>
                    <input type="text" id="num_assurance" name="num_assurance" value={{$voiture->num_assurance}} class="form-control">
                </div>
                <div class="form-group">
                    <label for="kilometrage">Kilométrage:</label>
                    <input type="number" id="kilometrage" name="kilometrage" value={{$voiture->kilometrage}} class="form-control">
                </div>
                <div class="form-group">
                    <label for="date_debut_location">Date de début de location:</label>
                    <input type="date" id="date_debut_location" name="date_debut_location" value={{$voiture->date_debut_location}} class="form-control">
                </div>
                <div class="form-group">
                    <label for="date_fin_location">Date de fin de location:</label>
                    <input type="date" id="date_fin_location" name="date_fin_location" value={{$voiture->date_fin_location}} class="form-control">
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" id="image" name="image" accept="image/*" value={{$voiture->image}} class="form-control-file">
                </div>
                <button type="submit" class="btn btn-primary">Misajours</button>
            </form>
        </div>

    </body>

    </html>
@endsection
