<?php

namespace App\Http\Controllers;

use App\Fournisseurs;
use App\Mail\CommandeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CommandeMailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fournisseurs = Fournisseurs::all();
        $alerte = 'Vous venez de passer une commande !';
        return view('Admin.Fournisseurs.Fournisseurs')->with(['fournisseurs'=> $fournisseurs,
        'alerte' => $alerte,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fournisseurs = Fournisseurs::all();
        $produit = $request->Nom_Commercial;
        $message = $request->message;
        $quantite = $request->Quantite;
        Mail::to($request->email)->send(new CommandeMail($message, $produit, $quantite));
        return redirect()->route('/CommandeMail.index')->with('statut', 'Vous venez de commander un produit !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('important');
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
        $fournisseur = Fournisseurs::where('id', $id)->first();
        $produit = $request->Nom_Commercial;
        $message = $request->message;
        $quantite = $request->Quantite;
        $fournisseur =  DB::table('fournisseurs')->where('id', $id)->first();
        Mail::to($fournisseur->email)->send(new CommandeMail($message, $produit, $quantite));
        return view('Admin.Fournisseurs.Fournisseurs');
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
