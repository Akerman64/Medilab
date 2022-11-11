<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Patient extends Eloquent
{

    protected $connection ='mongodb';
    protected $collection ='patient';
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'genre',
        'age',
        'ville',
        'maladie',
        'traitement',
        'commentaire'
    ];
    use HasFactory;
}
