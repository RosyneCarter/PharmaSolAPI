<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forme extends Model
{
    protected $fillable = [
        'forme'
    ];
    public function produits()
    {
        return $this->hasMany(produit::class);
    }
}
