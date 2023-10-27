@include('navbar', ['appName' => __('auth.app_name')])
@extends('layout')
@section('content')
    <div class="project-details">
        <h2>{{ $projet->nom_projet }}</h2>
        <form>
            <fieldset>
                <legend>{{ __('auth.project_information') }}</legend>
                <div class="form-group">
                    <label for="typeProjet">{{ __('auth.project_type') }}</label>
                    <input type="text" id="typeProjet" value="{{ $projet->type_projet }}" readonly>
                </div>
                <div class="form-group">
                    <label for="complexite">{{ __('auth.complexity') }}</label>
                    <input type="text" id="complexite" value="{{ $projet->complexite }}%" readonly>
                </div>
                <div class="form-group">
                    <label for="pourcentageComplet">{{ __('auth.final_grade') }}</label>
                    <input type="text" id="pourcentageComplet" value="{{ $projet->pourcentage_complet }}%" readonly>
                </div>
                <div class="form-group">
                    <label for="lienGithub">{{ __('auth.github_link') }}</label>
                    <a href="{{ $projet->lien_github }}" target="_blank">{{ $projet->lien_github }}</a>
                </div>
                <div class="form-group">
                    <label for="description">{{ __('auth.project_description') }}</label>
                    <textarea id="description" readonly>{{ $projet->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="imageProjet">{{ __('auth.project_image') }}</label>
                    <img src="{{ asset('storage/' . $projet->image_projet) }}" alt="{{ $projet->nom_projet }}" width="300">
                </div>
            </fieldset>
        </form>
    </div>
@endsection

<style>
    .project-details {
        background-color: #f0f0f0;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
        padding: 20px;
        margin: 20px;
        max-width: 600px;
        margin: 0 auto;
        color: black;
    }
    .form-group img {
        min-width: 100%;
        height: auto;
        display: block;
        margin-top: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    form {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
    }
    legend {
        font-weight: bold;
        color: black;
    }
    .form-group {
        margin-bottom: 20px;
    }
    label {
        display: block;
        font-weight: bold;
        color: black;
    }
    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
        margin-top: 5px;
    }
    textarea {
        height: 100px;
    }
    a {
        text-decoration: none;
        color: #007BFF;
        font-weight: bold;
    }
    input[type="text"][readonly],
    textarea[readonly] {
        background-color: #ffffff;
        border: 1px solid #e0e0e0;
    }
</style>