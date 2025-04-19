<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    protected $fillable = ["bien_id", "client_id", "date_debut", "statut"];

    
    public function bien()
    {
        return $this->belongsTo(Bien::class, "bien_id");
        
    }
    public function client()
    {
        return $this->belongsTo(Client::class, "client_id");

    }
}
