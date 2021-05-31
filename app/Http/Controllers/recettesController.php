<?php

namespace App\Http\Controllers;

use App\Facture;
use App\produit;
use App\recette;
use Illuminate\Http\Request;

class recettesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factures = Facture::all();
        $factures = $factures->unique(function($item){
            return date_format($item['created_at'], 'd-m-Y');
        });
        
        return view('Admin.recettes.recettes')->with('factures', $factures);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recettes = recette::all();
        return view('Admin.recettes.recettes')->with('recettes', $recettes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //;
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
        $Nom_Commercial = recette::all();
        $Quantite = recette::all();
        return view('Admin.Produits.EditP',[
            'id' => $id,
            'Nom_Commercial' => $Nom_Commercial, 
            'Quantite' => $Quantite,
        ]);
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
        $recettes = recette::where('id', $id)->first();
        $recettes->Nom_Commercial = $request->Nom_Commercial;
        $recettes->Quantite = $request->Quantite;
        $recettes->save();
        return redirect()->route('/recettes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recettes = recette::where('id', $id)->first();
        $recettes->delete();

        return redirect()->route('/recettes.index');
    }
}
