<?php

namespace App\Http\Controllers;

use App\Facture;
use App\produit;
use App\recette;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class enregistrementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::all();
        $produit = Produit::find(1);
        //dd($produit->prix);
        return view('Admin.recettes.enregistrement')->with('produits', $produits);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $factures = Facture::all();
        return view('Admin.recettes.recettes')->with('factures', $factures);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $facture = new Facture();
        $prix = produit::find(1);
        $facture->save();
        $facture->nom = Str::random(6).'_'.$facture->id;
        //dd($request->all());
        $produits = $request->Nom_Commercial;
        $qtes = $request->Quantite;
        $total = [];
        $DateAndTime = date('m-d-Y h:i:s a', time());
        
        foreach ($produits as $key1 => $id1) {
            foreach ($qtes as $key2 => $id2) {
                if ($key1 == $key2) {
                    $prix = produit::find($id1)->prix->first()->prix;
                    $produit = produit::findOrFail($id1);
                    // dd($produit->Nom_Commercial);
                    $somme = implode(',', $produit->prix()->pluck('prix')->toArray());
                    // dd($somme);       
                    $prix = $id2 * $somme;
                    $total[] = $prix;
                    DB::table('facture_produit')->insert([
                        'produit_id' => $id1,
                        'facture_id' => $facture->id,
                        'quantite' => $id2
                    ]);
                   $recette = recette::create([
                        'Quantite' => $id2,
                        'Nom_Commercial' => $id1
                   ]);
                   $newNom = DB::table('produits')->select('Nom_Commercial')->where('id', $id1)->first();
                   $nbe = DB::table('produits')->select('Quantité')->where('id', $id1)->first();
                   if ($nbe > $id2) {
                    $new = $nbe->Quantité - $id2;
                    DB::table('produits')->where('id', $id1)->update(['Quantité' => $new]);
                   }
                  
                }
            }
        }
        $facture->total = array_sum($total);
        $facture->save();
        $qtes = $request->Quantite;
        foreach ($produits as $key1 => $id1) {
            foreach ($qtes as $key2 => $id2) {
                $qtes = $request->Quantite;
                if ($key1 == $key2) {
                    $newNom = DB::table('produits')->select('Nom_Commercial')->where('id', $id1)->first();
                    $nbe = DB::table('produits')->select('Quantité')->where('id', $id1)->first();
                    $new = $nbe->Quantité - $id2;
                    // dd($new);
                    if ($new < 10){
                        
                        $alerte = 'Le produit' .$new. 'est à cours de stock. Veillez recharger le stock !';
                        return view('Admin.recettes.Facture')->with([
                            'alerte' => $alerte,
                            'produits' => $produits,
                            'qtes'  => $qtes,
                            'facture'  => $facture
                        ]);
                    }else{
                        $alerte = '';
                        return view('Admin.recettes.Facture')->with([
                            'produits' => $produits,
                            'alerte' => $alerte,
                            'qtes'  => $qtes,
                            'facture'  => $facture
                        ]);
                    }
                }
            }
        }

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
