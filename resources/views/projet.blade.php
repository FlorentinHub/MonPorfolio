@include('navbar', ['appName' => 'Florentin Toupet'])
@extends('layout')
@section('content')
    <div class="projet-details">
        <h2>{{ $projet->nom_projet }}</h2>
        <p>Type de Projet: {{ $projet->type_projet }}</p>
        <p>Complexité: {{ $projet->complexite }}</p>
        <p>Pourcentage Complet: {{ $projet->pourcentage_complet }}%</p>
        <p>Lien GitHub: <a href="{{ $projet->lien_github }}">{{ $projet->lien_github }}</a></p>
        <p>Description: {{ $projet->description }}</p>
        <ul class="collaborateurs">
                <li>
                    dd({{$projet}});
                    @if ($projet->collaborateur)
                        <img src="{{ asset('URL_de_votre_image_par_defaut.jpg') }}"
                            alt="{{ $projet->collaborateur->nom_collaborateur }}" width="40" height="40">
                        <a href="{{ $projet->collaborateur->compte_github }}"
                            class="nostyle">{{ $projet->collaborateur->nom_collaborateur }}</a>
                    @else
                        <img src="{{ asset('URL_de_votre_image_par_defaut.jpg') }}" alt="Collaborateur inconnu"
                            width="40" height="40">
                        <span class="nostyle">Collaborateur inconnu</span>
                    @endif
                </li>

                <script>
                    @if ($projet->collaborateur)
                        getGitHubAvatar("{{ $projet->collaborateur->getUsernameFromGitHubLink() }}").then(avatarUrl => {
                            const img = document.querySelector(`img[alt="{{ $projet->collaborateur->nom_collaborateur }}"]`);
                            if (img) {
                                img.src = avatarUrl;
                            }
                        });
                    @endif
                </script>
        </ul>
    </div>
@endsection
