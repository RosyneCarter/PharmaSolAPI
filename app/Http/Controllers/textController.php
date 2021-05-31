<?php

namespace App\Http\Controllers;

use App\Prix;
use App\Type;
use App\Forme;
use App\produit;
use App\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class textController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::all();
        $infos = produit::all();
        $DateAndTime = date('Y-m-d', time());
        $Rosy = [];
        foreach ($infos as $info) {
            if ( $info['date_Exp'] <= $DateAndTime  ) {
                $Rosy[] = $info->Nom_Commercial;
              
            }
        }
        if ($Rosy != "") {
            $val = implode(", " ,$Rosy );
            $message = "les produits ".$val." sont expirés";
            return view('Admin.Produits.Produits')->with([
                'message' => $message,
                'produits' => $produits
            ]);
        }else{
            return view('Admin.Produits.Produits')->with([
                'produits' => $produits
            ]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prix = prix::all();
        $types = type::all();
        $categories = categorie::all();
        $formes = forme::all();
        $produits = produit::all();
        return view('Admin.Produits.Create')->with([
            'produits' => $produits,
            'prix' => $prix,
            'formes' => $formes,
            'types' => $types,
            'categories' => $categories,
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
        $prix = $request->prix;
        $formes = $request->forme;
        $types = $request->type;
        $categories = $request->categorie;
        $produits = produit::create([
            'Nom_Commercial' => $request['Nom_Commercial'], 
            'prix_id' => $request['prix'],
            'categorie_id' => $request['categorie'],
            'forme_id' => $request['forme'],
            'type_id' => $request['type'],
            'Numéro_Lot'=> $request['Numéro_Lot'],
            'date_Exp' => $request['date_Exp'],       
            'Emplacement' => $request['Emplacement'],
            'Dosage' => $request ['Dosage'],
            'Quantité' => $request['Quantité'],
        ]);
        
        return redirect()->route('/text.index');

       
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
        $produit = produit::findOrFail($id);
        $prix = prix::all();
        $types = type::all();
        $categories = categorie::all();
        $formes = forme::all();
        return view('Admin.Produits.EditP',[
            'produits' => $produit,
            'prix' => $prix,
            'formes' => $formes,
            'types' => $types,
            'categories' => $categories,
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
        $produits = produit::where('id', $id)->first();
       
        $produits->Nom_Commercial = $request->Nom_Commercial;
        $produits->Numéro_Lot = $request->Numéro_Lot;
        $produits->date_Exp = $produits->date_Exp;
        $produits->Emplacement = $request->Emplacement;
        $produits->Dosage = $request->Dosage;
        $produits->Quantité = $request->Quantité;
        $produits->prix_id = $request->prix;
        $produits->type_id = $request->type;
        $produits->forme_id = $request->forme;
        $produits->categorie_id = $request->categorie;
        $produits->save();
        return redirect()->route('/text.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Gate::denies('delete-users')){
            return redirect()->route('admin.users.index');
        };
        $produit = produit::where('id', $id)->first();
        // dd($produit);
        $produit->factures()->detach();
        $produit->commandes()->detach();
        $produit->delete();

        return redirect()->route('/text.index');
    }
}
