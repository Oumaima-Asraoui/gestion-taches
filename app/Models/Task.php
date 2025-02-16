<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'date_fin',
        'priorite',   // Ajout de la colonne 'priorite'
        'statut',     // Ajout de la colonne 'statut'
        'user_id'
    ];
}
