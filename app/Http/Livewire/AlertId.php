<?php

namespace App\Http\Livewire;

use App\commande;
use App\statut;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AlertId extends Component
{
    public $statuts;
    public $commandes;
    public $commande;
    public $selectedStatut = null;
    public function mount(){
    $this->commandes = commande::all();
    $this->statuts = statut::all();
    }
    public function render()
    {
        return view('livewire.alert-id');
    }
    public function updatedSelectedStatut($statut){
        if (!is_null($statut)) {
            dd($statut);
           $commande = DB::table('statuts')->where('id' , $statut)->pluck('id')->first();
           $result = DB::table('commandes')->update('commandes.statut_id' ,'=', $commande);
           $this->commande->update('name', $statut);
        }
    }
}
