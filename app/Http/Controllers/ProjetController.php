<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;

class ProjetController extends Controller
{
    public function index()
    {
        $projets = Projet::all(); // Récupére tous les projets depuis la base de données
        return $projets;
    }

    public function create()
    {
        return view('projets.create');
    }
    public function update(Request $request, $id)
    {
        $projet = Projet::findOrFail($id);

        $validatedData = $request->validate([
            'nom_projet' => 'required',
            'type_projet' => 'required',
            'complexite' => 'required|integer',
            'pourcentage_complet' => 'required|integer',
            'lien_github' => 'url|nullable',
            'description' => 'nullable',
        ]);

        $projet->update($validatedData);

        return redirect()->route('accueil')->with('success', 'Le projet a été modifié avec succès.');
    }


    public function store(Request $request)
    {
        // Logique pour enregistrer un nouveau projet dans la base de données
        //Check if data is valide:

        $validedData = $request->validate([
            'nom_projet' => 'required',
            'type_projet' => 'required',
            'complexite' => 'required|integer',
            'pourcentage_complet' => 'required|integer',
            'lien_github' => 'url|nullable',
            'description' => 'nullable',
        ]);
        $projet = Projet::create($validedData);

        return redirect('/');
    }
    public function details($id)
    {
        $projet = Projet::findOrFail($id);
        return view('projet', compact('projet'));
    }

    public function show($id)
    {
        $projet = Projet::findOrFail($id);
        return view('projets.show', compact('projet'));
    }

    public function edit($id)
    {
        $projet = Projet::findOrFail($id);
        return view('projets.edit', compact('projet'));
    }
    public function confirmDelete($id)
    {
        $projet = Projet::findOrFail($id);
        return view('projets.confirm-delete', compact('projet'));
    }

    public function destroy($id)
    {
        $projet = Projet::findOrFail($id);
        $projet->delete();
        return redirect()->route('accueil')->with('success', 'Le projet a été supprimé avec succès.');
    }
}
