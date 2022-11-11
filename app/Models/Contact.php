<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Contact extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'contact';

    protected $fillable = [
        'name',
        'email',
        'sujet',
        'message',
    ];
    use HasFactory;
}
