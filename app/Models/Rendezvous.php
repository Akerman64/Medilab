<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Rendezvous extends Eloquent
{

    protected $connection = 'mongodb';
    protected $collection ='rendezvous';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'date',
        'department',
        'doctor',
        'message'
    ];

    use HasFactory;
}
