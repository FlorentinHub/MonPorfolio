<header>
    <nav>
        <div class="logo">Florentin Toupet</div>
        <ul class="nav-links">
            <li><a href="{{ route('accueil') }}">Accueil</a></li>
            <li><a href="#">Projets</a></li>
            <li><a href="#">À Propos</a></li>
            @guest <!-- Si l'utilisateur n'est pas connecté -->
                <li><a href="{{ route('login') }}">Se Connecter</a></li>
                <li><a href="{{ route('register') }}">S'Inscrire</a></li>
            @else <!-- Si l'utilisateur est connecté -->
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se Déconnecter</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
            @if(Auth::check()) <!-- Si l'utilisateur est connecté -->
                <li><a href="/ajouter-projet">Ajouter un Projet</a></li>
            @endif
        </ul>
    </nav>
</header>   