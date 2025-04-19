<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    public $fillables = ["ville", "quartier", "description", "prix_mensuel", "statuts"];

    public function clients(){
        return $this->belongsToMany(Client::class, 'contrats')->withPivot('date_debut', 'statut');
    }
}
