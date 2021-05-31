<?php

namespace App\Http\Controllers;

use App\User;
use App\produit;
use App\commande;
use App\Fournisseurs;
use App\Mail\CommandeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class welcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fournisseurs = Fournisseurs::all();
        
        return view('Admin.Fournisseurs.Fournisseurs')->with('fournisseurs', $fournisseurs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.recettes.Facture');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
    {
        $id = DB::table('statuts')->where('nom' , 'Validée')->pluck('id')->first();
        $commande  = new commande();
        $commande->statut_id = $id;
        $commande->message = $request->message;
        $commande->fournisseur_id = $request->fournisseurId;

        $commande->save();
        $produits = $request->Nom_Commercial;
        $qtes = $request->Quantite;
      
        foreach ($produits as $key1 => $produit) {
            foreach ($qtes as $key2 => $quantite) {
                if ($key1 == $key2) {
                    $produit = produit::where('Nom_Commercial', $produit)->first()->id;
                    DB::table('commande_produit')->insert([
                        'produit_id' => $produit,
                        'commande_id' => $commande->id,
                        'quantite' => $quantite
                    ]);
                }
            }
        }
        $fournisseurs = Fournisseurs::all();
        $produit = $request->Nom_Commercial;
        $message = $request->message;
        $quantite = $request->Quantite;
        Mail::to($request->email)->send(new CommandeMail($message, $produit, $quantite));
        return redirect()->route('/CommandeMail.index')->with('statut', 'Vous venez de passer une commande !');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $commande  = new commande();
        $commande->statut = $request->statut;
        $commande->message = $request->message;
        $commande->fournisseur_id = $request->fournisseurId;
        $commande->save();
        return redirect()->route('/commander.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commande = commande::where('id',  $id)->first();
        $commande->delete();

        return redirect()->route('/commander.index');
    }
}
