<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-around;
            background-color: #787474;
            padding: 10px 20px; /* Reduced padding */
            position: fixed; /* Make the navbar fixed */
            width: 100%; /* Full width */
            top: 0; /* Stick to the top */
            z-index: 1000; /* Ensure it's above other content */
        }

        ul li {
            margin: 0;
        }

        ul li a {
            display: block;
            padding: 4px 10px; /* Reduced padding for smaller size */
            text-decoration: none;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 14px; /* Smaller font size */
        }

        ul li a:hover {
            background-color: rgb(22, 19, 19);
        }

    </style>
</head>
<body>
    <ul>
        <li><a href="/">Welcome</a></li>
        <li><a href="{{ route('voitures.index') }}">Voitures</a></li>
        <li><a href="{{ route('reservations.index') }}">Réservations</a></li>
        <li><a href="{{ route('clients.index') }}">Clients</a></li>
    </ul>
    @yield('content')
</body>
</html>
