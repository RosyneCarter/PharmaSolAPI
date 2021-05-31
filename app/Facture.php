<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    public function recette()
    {
        return $this->hasOne(recette::class);
    }
    public function produits()
    {
        return $this->belongsToMany(produit::class);
    }
}
