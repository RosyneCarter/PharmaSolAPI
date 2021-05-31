<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
    protected $fillable = [
        'messages','fournisseur_id','statut_id'
    ];
    public function fournisseur()
    {
        return $this->belongsTo(Fournisseurs::class);
    }
    public function produits()
    {
        return $this->belongsToMany(produit::class);
    }

    public function statut()
    {
        return $this->belongsTo(statut::class);
    }
}
