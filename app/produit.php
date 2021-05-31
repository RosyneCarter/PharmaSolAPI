<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class produit extends Model
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Numéro_Lot', 'date_Exp', 'prix_id', 'forme_id', 'categorie_id', 'type_id' ,'Nom_Commercial', 'Quantité', 'Emplacement', 'Dosage'
    ];
    public function prix()
    {
        return $this->belongsTo(prix::class);
    }
    public function factures()
    {
        return $this->belongsToMany(facture::class);
    }
    public function commandes()
    {
        return $this->belongsToMany(commande::class);
    }
    public function categorie()
    {
        return $this->belongsTo(categorie::class);
    }
    public function forme()
    {
        return $this->belongsTo(forme::class);
    }
    public function type()
    {
        return $this->belongsTo(type::class);
    }
}

