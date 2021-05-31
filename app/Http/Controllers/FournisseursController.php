<?php

namespace App\Http\Controllers;

use App\Role;
use App\produit;
use App\Fournisseurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class FournisseursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Fournisseurs $fournisseurs)
    {
        $fournisseurs = Fournisseurs::all();
        
        return view('Admin.Fournisseurs.Fournisseurs')->with('fournisseurs', $fournisseurs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Fournisseurs $fournisseurs)
    {
        $roles = Role::all();
        $fournisseurs = Role::all();
        return view('Admin.Fournisseurs.CreateF')->with([
            'roles' => $roles,
            'fournisseurs' => $fournisseurs,
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
        $roles = $request->roles;
        $fournisseurs = Fournisseurs::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'adresse' => $request['adresse'],
            'contact' => $request ['contact'],
        ]);
        $role = Role::select('id')->where('id', $roles)->first();
        $fournisseurs->roles()->attach($role);
        return redirect()->route('Fournisseurs.Fournisseurs.index')->with('alerte', 'Fournisseur créé avec succes !');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produits = produit::all();
       $fournisseur = Fournisseurs::findOrFail($id);
        
       return view('Admin.Fournisseurs.commander',[
           
           'fournisseur' => $fournisseur,
           'produits' => $produits,
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fournisseur = Fournisseurs::findOrFail($id);
        
        return view('Admin.Fournisseurs.editF',[
            
            'fournisseur' => $fournisseur,
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
        $fournisseurs = Fournisseurs::where('id', $id)->first();

        $fournisseurs->name = $request->name;
        $fournisseurs->email = $request->email;
        $fournisseurs->adresse = $request->adresse;
        $fournisseurs->contact = $request->contact;
        $fournisseurs->save();

        return redirect()->route('Fournisseurs.Fournisseurs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fournisseurs = Fournisseurs::where('id', $id)->first();
        $fournisseurs->delete();

        return redirect()->route('Fournisseurs.Fournisseurs.index');
    }
}
