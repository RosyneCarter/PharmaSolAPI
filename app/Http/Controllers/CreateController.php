<?php

namespace App\Http\Controllers;

use App\Fournisseurs;
use Illuminate\Http\Request;
use App\produit;
use App\Stock;

class CreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fournisseurs = Fournisseurs::all();
        $produits = produit::all();
       return view('Admin.Fournisseurs.commander')->with([
        'fournisseurs'  => $fournisseurs,
        'produits' => $produits,
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(produit $produits)
    {
        $produits = produit::all();
        //dd($produits);
        return view('Admin.Produits.Create')->with([
            'produits' => $produits,
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produits = produit::where('id', $request)->first();
        $produits = produit::create([
            'Numero_de_Lot' => $request['Numero_de_Lot'],
            'date_Exp'  => $request['Numero_de_Lot'],
            'Nom_Commercial' => $request['Nom_Commercial'],          
            'Prix' => $request['Prix'],
            'Emplacement' => $request['Emplacement'],
            'categorie' => $request ['categorie'],
            'type' => $request ['type'],
            'Dosage' => $request ['Dosage'],
            'Quantité' => $request['Quantité'],
        ]);
        $produits = produit::select('id')->where('id', $produits)->first();
        return redirect()->route('Create.Create.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
