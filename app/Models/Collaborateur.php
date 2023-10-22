<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborateur extends Model
{
    protected $fillable = ['nom_collaborateur', 'compte_github', 'contact_courriel', 'degres_implications'];
}

