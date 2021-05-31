<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class recette extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nom_Commercial','Quantite',
    ];
    public function Facture()
    {
        return $this->belongsTo(Facture::class);
    }
}
