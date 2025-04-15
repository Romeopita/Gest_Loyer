<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        "type",
        "montant",
        "date",
        "statuts",
    ];

    public function contrat()
    {
        return $this->belongsTo(Contrat::class, );

    }
}
