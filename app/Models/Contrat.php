<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    private $fillables = [
        "date_debut",
        "statut",
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);

    }

    public function bien()
    {
        return $this->belongsTo(Bien::class);

    }
}
