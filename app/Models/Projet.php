<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_projet',
        'type_projet',
        'complexite',
        'pourcentage_complet',
        'lien_github',
        'description',
    ];
}
