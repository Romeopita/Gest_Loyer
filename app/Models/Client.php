<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ["nom", "prenom", "telephone", "num_carte"];

    public function clients(){
        return $this->belongsToMany(Bien::class, 'contrats')->withPivot('date_debut', 'statut');
    }
}
