<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    public $fillable = ["ville", "quartier", "description", "type", "prix_mensuel", "statuts"];
}
