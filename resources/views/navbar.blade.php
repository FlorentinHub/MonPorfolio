<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

<header>
    <nav>
        <a href="{{ route('accueil') }}" class="logo-link">
            <img src="https://media.discordapp.net/attachments/1080262834484682772/1162987133842239488/ft_3_blanc.png?ex=653def2b&is=652b7a2b&hm=ec3800fc4d1decc05cfd53af6d69eafe923d067b1548130b8d5089086a479262&=&width=117&height=200"
                alt="Votre Logo" class="logo">
        </a>
        <div class="logo">{{ $appName }}</div>
        <ul class="nav-links">
            <li><a href="/">Accueil</a></li>
            <li><a href="#">Projets</a></li>
            <li><a href="#">À Propos</a></li>
            @guest
                <li><a href="{{ route('login') }}">Se Connecter</a></li>
                <li><a href="{{ route('register') }}">S'Inscrire</a></li>
            @else
                <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se
                        Déconnecter</a>
                </li>

                @if (auth()->user()->isAdmin)
                    <li class="dropdown">
                        <a href="#" class="dropbtn">Admin</a>
                        <div class="dropdown-content">
                            <a href="/ajouter-projet">Ajouter un Projet</a>
                            <a href="/ajouter-collaborateur">Ajouter un Collaborateur</a>
                        </div>
                    </li>
                @endif

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
        </ul>
    </nav>
</header>


<style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropbtn {
        color: #fff;
        padding: 16px;
        font-size: 16px;
        border: none;
        background-color: transparent;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #111;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: #fff;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #007BFF;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .logo-link {
        text-decoration: none;
        display: flex;
        align-items: center;
        padding: 10px;
        transition: transform 0.2s;
    }

    .logo {
        width: 40px;
        height: 40px;
    }

    .logo-link:hover {
        transform: scale(1.1);
    }

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
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
