<!-- navbar.blade.php -->
<header>
    <nav>
        <div class="logo">{{ $appName }}</div>
        <ul class="nav-links">
            <li><a href="{{ route('accueil') }}">Accueil</a></li>
            <li><a href="#">Projets</a></li>
            <li><a href="#">À Propos</a></li>
            @guest
                <li><a href="{{ route('login') }}">Se Connecter</a></li>
                <li><a href="{{ route('register') }}">S'Inscrire</a></li>
            @else
                <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se Déconnecter</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
            @if (Auth::check())
                <li><a href="/ajouter-projet">Ajouter un Projet</a></li>
            @endif
        </ul>
    </nav>
</header>
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
    </style>
