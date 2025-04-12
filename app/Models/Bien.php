<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    public $fillables = [
        "ville",
        "quartier",
        "type",
        "prix",
        "statuts",
    ];
}
