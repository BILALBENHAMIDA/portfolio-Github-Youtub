@extends('layout')

@section('title', 'Liste des Voitures')

@section('content')
    <header>
        <h1>Bienvenue sur notre plateforme de gestion de location de voitures</h1>
        <p>Découvrez nos services et les rôles de chaque page</p>
    </header>
    <div class="container">
        <h1 class="main-title">Locations</h1>

        <!-- Background Section with Title and Paragraph -->
        <div class="background-section">
            <img src="imagewelc.jpeg" alt="Bienvenue" class="background-image">
            <div class="overlay">
                <h2>Présentation de nos Locations</h2>
                <p>Découvrez nos différentes agences de location réparties dans plusieurs villes, offrant un service de qualité et une large gamme de véhicules adaptés à vos besoins.</p>
            </div>
        </div>
        
        <!-- Location Cards -->
        <div class="location-cards">
            @foreach ($locations as $location)
                <div class="location-card">
                    <img src="{{ $location->image }}" alt="Image de {{ $location->nom }}">
                    <div class="location-details">
                        <h2>{{ $location->nom }}</h2>
                        <p class="info">Adresse: {{ $location->adresse }}</p>
                        <p class="info">Rue: {{ $location->rue }}</p>
                        <p class="info">Ville: {{ $location->ville }}</p>
                        <p class="info">Pays: {{ $location->pays }}</p>
                        <p class="info">Téléphone: {{ $location->telephone }}</p>
                        <p class="info">Email: <a href="mailto:{{ $location->email }}">{{ $location->email }}</a></p>
                        <p class="info">Site: <a href="{{ $location->site }}" target="_blank">{{ $location->site }}</a></p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Additional Description Sections -->
        <div class="description-sections">
            <div class="description-section">
                <h2>Nos Services</h2>
                <p>Nous offrons une gamme complète de services pour répondre à tous vos besoins de location de voitures. Que vous ayez besoin d'une voiture pour une journée, une semaine ou plus, nous avons des options flexibles et abordables pour vous. Nos voitures sont bien entretenues et régulièrement inspectées pour assurer votre sécurité et votre confort. De plus, nous proposons des services supplémentaires comme l'assistance routière 24/7, le GPS intégré, et des sièges bébé sur demande.</p>
            </div>
            <div class="description-section">
                <h2>Pourquoi Nous Choisir</h2>
                <p>Notre plateforme se distingue par son engagement envers la satisfaction du client. Nous offrons non seulement des voitures de qualité, mais aussi un service clientèle exceptionnel. Notre équipe est disponible pour vous aider à tout moment, de la réservation à la restitution du véhicule. Nous nous efforçons de rendre votre expérience aussi fluide et agréable que possible. Avec des tarifs compétitifs et une transparence totale, vous pouvez être sûr que vous faites le bon choix en optant pour nos services.</p>
            </div>
            <div class="description-section">
                <h2>Témoignages de Clients</h2>
                <p>Voici ce que disent nos clients :</p>
                <ol class="testimonials">
                    <li>"Service impeccable et voitures en excellent état. Je recommande vivement !" - Marie D.</li>
                    <li>"Une expérience de location sans tracas, avec un personnel amical et professionnel." - Jean P.</li>
                    <li>"Des prix abordables et un large choix de véhicules. Parfait pour mes voyages d'affaires." - Clara L.</li>
                    <li>"J'ai loué une voiture pour mes vacances en famille et tout s'est déroulé à merveille. Merci !" - Marc V.</li>
                </ol>
                <p>Nous sommes fiers de recevoir de tels témoignages et nous nous engageons à continuer de fournir un service exceptionnel à tous nos clients.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <h2>Contactez-nous</h2>
            <p>Téléphone: +33 1 23 45 67 89</p>
            <p>Email: <a href="mailto:info@locationvoitures.com">info@locationvoitures.com</a></p>
        </div>
    </footer>
@endsection

<style>
    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f2f5;
    }
    header {
        text-align: center;
        padding: 50px 20px;
        background-color: #37474f;
        color: white;
    }
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }
    .main-title {
        text-align: center;
        font-size: 2.5em;
        margin: 20px 0;
        color: #37474f;
    }
    .background-section {
        position: relative;
        margin: 20px 0;
        border-radius: 8px;
        overflow: hidden;
    }
    .background-image {
        width: 100%;
        height: auto;
        display: block;
    }
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 20px;
    }
    .overlay h2 {
        font-size: 2em;
        margin-bottom: 10px;
    }
    .overlay p {
        font-size: 1.2em;
        max-width: 800px;
    }
    .location-cards {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        justify-content: center;
    }
    .location-card {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        width: calc(25% - 15px);
        display: flex;
        flex-direction: column;
        align-items: center;
        box-sizing: border-box;
    }
    .location-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }
    .location-card img {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 15px;
    }
    .location-details {
        width: 100%;
        text-align: center;
    }
    .location-details h2 {
        font-size: 1.4em;
        margin-bottom: 8px;
        color: #37474f;
    }
    .location-details p {
        margin: 5px 0;
        font-size: 0.9em;
        color: #616161;
    }
    .location-details .info {
        font-weight: bold;
        color: #37474f;
    }
    .location-details a {
        color: #1e88e5;
        text-decoration: none;
    }
    .location-details a:hover {
        text-decoration: underline;
    }
    .description-sections {
        margin-top: 30px;
    }
    .description-section {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
    }
    .description-section h2 {
        font-size: 1.8em;
        margin-bottom: 10px;
        color: #37474f;
    }
    .description-section p {
        font-size: 1.1em;
        color: #616161;
    }

    footer {
        background-color: #37474f;
        color: white;
        text-align: center;
        padding: 20px 0;
        margin-top: 30px;
    }
    .footer-content {
        max-width: 800px;
        margin: 0 auto;
    }
    .footer-content h2 {
        font-size: 1.5em;
        margin-bottom: 10px;
    }
    .footer-content p {
        margin: 5px 0;
        font-size: 1em;
    }
    .footer-content a {
        color: #1e88e5;
        text-decoration: none;
    }
    .footer-content a:hover {
        text-decoration: underline;
    }
    @media (max-width: 992px) {
        .location-card {
            width: calc(33.33% - 15px);
        }
    }
    @media (max-width: 768px) {
        .location-card {
            width: calc(50% - 15px);
        }
    }
    @media (max-width: 480px) {
        .location-card {
            width: calc(100% - 15px);
        }
    }
</style>
