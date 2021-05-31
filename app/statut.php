<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class statut extends Model
{
    protected $fillable = [
        'nom'
    ];
    public function commandes()
    {
        return $this->hasMany(commande::class);
    }
}
