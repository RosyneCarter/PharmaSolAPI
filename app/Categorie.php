<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'categorie'
    ];
    public function produits()
    {
        return $this->hasMany(produit::class);
    }
}
