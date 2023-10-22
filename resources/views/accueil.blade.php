<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/acceuil.css">
    <link rel="icon"
        href="https://cdn.discordapp.com/attachments/1080262834484682772/1162839789381357639/FT.png?ex=653d65f2&is=652af0f2&hm=7e16de0971a1cd0d52bfe22955db19abb4a8ffc934ab17658170173391cd2e8c&">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <title> Florentin Toupet</title>
</head>
@include('navbar', ['appName' => 'Florentin Toupet'])

<body>
    @extends('layout')
    @section('content')
        <section class="hero">
            <div class="hero-content">
                <h1>Bienvenue sur mon Portfolio</h1>
                <p>Découvrez qui je suis grâce à ce petit projet personnel. Développé grâce à php en utilisant Laravel</p>
                <a href="#projets" class="btn">Découvrir mes Projets</a>
            </div>
        </section>
        <section class="projets" id="projets">
            <div class="row">
                @foreach ($projets as $projet)
                    <div class="col-md-6">
                        <div class="portfoliocard">
                            <div class="coverphoto"></div>
                            <div class="profile_picture"></div>
                            <div class="left_col">
                                <div class="followers">
                                    <div class="follow_count">{{ $projet->complexite }}</div>
                                    Complexité
                                </div>
                                <div class="following">
                                    <div class="follow_count">{{ $projet->pourcentage_complet }}</div>
                                    Note finale
                                </div>
                                <div class="following">
                                    <div class="follow_count"></div>
                                    <a href="{{ route('projet.details', $projet->id) }}" class="btn">Détails</a>
                                    @if (auth()->check() && auth()->user()->isAdmin)
                                        <a href="{{ route('projet.edit', $projet->id) }}" class="btn">Modifier</a>
                                        <a href="{{ route('projet.confirmDelete', $projet->id) }}"
                                            class="btn btn-danger">Supprimer</a>
                                    @endif
                                </div>
                            </div>
                            <div class="right_col">
                                <h2 class="name">{{ $projet->nom_projet }}</h2>
                                <h3 class="location">{{ $projet->type_projet }}</h3>
                                <ul class="contact_information">
                                    <li class="work">Description</li>
                                    <li class="description">{{ $projet->description }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <footer>
            <p>&copy; 2023 - FlorentinToupet</p>
            @if (auth()->check())
                <p>Connecté en tant que <b>{{ auth()->user()->name }}</b></p>
            @endif
        </footer>
    </body>
    <style>
        body,
        h1,
        h2,
        p {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #fff;
        }

        header {
            background-color: #111;
            padding: 20px 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin-right: 20px;
        }

        .nav-links a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        .hero {
            background-image: url('');
            background-size: cover;
            background-position: center;
            text-align: center;
            padding: 100px 0;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 40px;
        }

        .btn {
            display: inline-block;
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-bottom: 5px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .projets {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            /* Deux colonnes avec une largeur égale */
            gap: 20px;
            /* Espace entre les cartes */
            padding: 80px 0;
        }

        .projet-card {
            max-width: 100%;
        }

        /* Style du pied de page */
        footer {
            background-color: #111;
            text-align: center;
            padding: 20px 0;
        }

        footer p {
            font-size: 20px;
            font-size: bold;
        }

        a.nostyle {
            color: inherit;
            text-decoration: none;
            padding: 0;
            margin: 0;
        }

        div.portfoliocard {
            position: relative;
            height: 450px;
            width: 400px;
            background: rgba(255, 255, 255, 1);
            border: 1px solid rgba(0, 0, 0, 0.7);
            box-shadow: 0px -1px 3px rgba(0, 0, 0, 0.1),
                0px 2px 6px rgba(0, 0, 0, 0.5);
            border-radius: 6px;
            margin: 30px auto;
            overflow: hidden;
            z-index: 100;
        }

        div.portfoliocard div.coverphoto {
            width: 100%;
            height: 120px;
            background: url('http://farm8.staticflickr.com/7149/6484148411_baf8d2e934_z.jpg');
            background-position: center center;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: inset 0px 3px 20px rgba(255, 255, 255, 0.3),
                1px 0px 2px rgba(255, 255, 255, 0.7);
            z-index: 99;
        }

        div.portfoliocard div.left_col,
        div.portfoliocard div.right_col {
            float: left;
            height: 340px;
        }

        div.portfoliocard div.left_col {
            width: 40%;
            padding-top: 60px;
            box-sizing: border-box;
        }

        div.portfoliocard div.right_col {
            width: 60%;
            background: rgba(245, 245, 245, 1);
            border-left: 1px solid rgba(230, 230, 230, 1);
            box-shadow: inset 0px 1px 1px rgba(255, 255, 255, 0.7);
            margin-left: -1px;
            border-bottom-right-radius: 5px;
        }

        div.portfoliocard div.profile_picture {
            width: 110px;
            height: 110px;
            background: rgba(255, 255, 255, 1);
            position: absolute;
            top: 65px;
            left: 40px;
            border-radius: 100%;
            background-image: url('http://cache.spreadshirt.net/Public/Common/images/profile-pic-placeholder_130x130.png');
            background-size: 100% 100%;
            padding: 7px;
            border: 4px solid rgba(255, 255, 255, 1)
        }

        div.portfoliocard div.right_col h2.name {
            font-size: 30px;
            font-weight: 300;
            color: rgba(30, 30, 30, 1);
            padding: 0;
            margin: 20px 10px 0px 30px;
        }

        div.portfoliocard div.right_col h3.location {
            font-size: 15px;
            font-weight: 300;
            color: rgba(170, 170, 170, 1);
            padding: 0;
            margin: -5px 10px 10px 30px;
        }

        div.portfoliocard ul.contact_information {
            margin-top: 20px;
            padding-left: 30px;
            list-style-type: none;
        }

        div.portfoliocard ul.contact_information li {
            height: 25px;
            width: 180px;
            line-height: 25px;
            font-weight: 300;
            font-size: 15px;
            color: rgba(140, 140, 140, 1);
            text-shadow: 1px 1px 1px rgba(255, 255, 255, 0.8);
            padding: 5px 0px;
            background-repeat: no-repeat;
            background-size: 18px 18px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0px 1px 1px rgba(255, 255, 255, 0.6);
            cursor: default;
        }

        div.portfoliocard ul.contact_information li:before {
            content: "";
            width: 25px;
            height: 25px;
            display: block;
            float: left;
            background-position: center;
            background-size: 18px 18px;
            background-repeat: no-repeat;
            margin-right: 5px;
            opacity: 0.7;
        }

        div.portfoliocard ul.contact_information li.description {
            border-bottom: none;
            /* Supprime la ligne grise sous la description */
            padding-left: 0;
            /* Supprime l'espace à gauche de la description */
            margin-left: 0;
            /* Supprime la marge à gauche de la description */
        }

        div.portfoliocard ul.contact_information li:hover:before {
            opacity: 1;
        }

        div.portfoliocard ul.contact_information li.work:before {
            background-image: url('http://schulzmarcel.de/x/icons/case_24.png');
        }

        div.portfoliocard ul.contact_information li.website:before {
            background-image: url('http://schulzmarcel.de/x/icons/globe_24.png');
        }

        div.portfoliocard ul.contact_information li.description:before {
            background-image: url('http://schulzmarcel.de/x/icons/paper_plane_24.png');
        }

        div.portfoliocard ul.contact_information li.resume:before {
            background-image: url('http://schulzmarcel.de/x/icons/inbox_24.png');
        }

        div.portfoliocard div.followers,
        div.portfoliocard div.following {
            margin: 10px 0px 0px 35px;
            font-weight: 300;
            font-size: 16px;
            color: rgba(30, 30, 30, 1);
        }

        div.portfoliocard div.follow_count {
            font-weight: 400;
            font-size: 25px;
            color: rgba(140, 140, 140, 1);
        }
    </style>

    </html>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Erreur',
                text: 'Vous n\'êtes pas autorisé à accéder à cette page en tant qu\'administrateur.', // Utilisez html au lieu de text
                customClass: {
                    popup: 'custom-swal2-popup',
                    title: 'custom-swal2-title',
                    content: 'custom-swal2-content',
                    confirmButton: 'custom-swal2-confirm'
                }
            });
        @endif
    </script>
    <style>
        .swal2-popup {
            border-radius: 10px;
            border-color: #ff0000;
            background-color: black;
        }

        .swal2-title {
            color: #fff;
            font-size: 24px;
        }

        .swal2-content {
            color: #fff;
            font-size: 18px;
        }
        .swal2-actions {
            text-align: center;
        }

        .swal2-confirm {
            background-color: #ff0000;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .custom-swal2-confirm {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
        }
    </style>
