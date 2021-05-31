<?php

namespace App\Http\Controllers\API;
use App\produit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $produit = produit::where('Nom_Commercial', $request->name)->first();
       if (!$produit) {
           return response()->json([
                'status' => false,
                'message' => "Ce produit n'existe pas",            
            ]);
       } elseif ($produit->Quantité < 10) {
            return response()->json([
                'status' => false,
                'message' => "Ce produit n'est plus en stock",            
            ]);
       }
       
        return response()->json([
            'status' => true,
            'message' => "Produit trouvé",
            'content' => $produit,            
        ]);
    }
}
