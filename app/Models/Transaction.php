<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ["", "montant", "date", "statuts"];

    public function contrat()
    {
        return $this->belongsTo(Contrat::class, );

    }
}
