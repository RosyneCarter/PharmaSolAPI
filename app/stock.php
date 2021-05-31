<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class stock extends Model
{

    public function produits(){
        return $this->hasMany(produit::class);
    }
}
