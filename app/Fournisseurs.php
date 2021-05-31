<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Fournisseurs extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'adresse','contact'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'role_fournisseurs' , 'role_id', 'fournisseur_id');

    }

    public function isFournisseur()
    {
        return $this->roles()->where('role', 'fournisseur')->first();
    }

    public function hasAnyRole(array $roles)
    {
        return $this->roles()->whereIn('role', $roles)->first();
    }
    public function commandes()
    {
        return $this->hasMany(commande::class, );
    }
}

