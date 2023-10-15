@extends('layout')
@section('content')
    <div class="projet-details">
        <h2>{{ $projet->nom_projet }}</h2>
        <p>Type de Projet: {{ $projet->type_projet }}</p>
        <p>Complexité: {{ $projet->complexite }}</p>
        <p>Pourcentage Complet: {{ $projet->pourcentage_complet }}%</p>
        <p>Lien GitHub: <a href="{{ $projet->lien_github }}">{{ $projet->lien_github }}</a></p>
        <p>Description: {{ $projet->description }}</p>
    </div>
@endsection
