<?php

namespace App\Http\Controllers;

use App\Produit;
use App\commande;
use App\Fournisseurs;
use App\statut;
use Illuminate\Http\Request;

class CommanderController extends Controller
{
    public function index()
    {
        $commandes = commande::all();
        $statuts = statut::all();
        
        return view('Admin.Fournisseurs.liste')->with([
            'commandes' => $commandes,
            'statuts' => $statuts
        ]);
    }
}
