
    @foreach ($commandes as $commande)
    <tr>
        <td scope = "row"> {{$commande->id}} </td>
        <td> {{$commande->fournisseur->name}}</td>
        <td> {{implode(',', $commande->produits()->pluck('Nom_Commercial')->toArray())}}</td>
        <td> {{$commande->created_at}} </td>
    </tr>
    @endforeach
    
    
    <td>
        <div>
            <label for="pet-select"> </label>
                <select name="pets" id="pet-select" wire:model = 'selectedStatut'>
                    @foreach ($statuts as $value)
                        <option value="[{{$value->id}},{{$commande->id}}]">{{$value->nom}}</option>
                    @endforeach
                </select>
        </div>
       
    </td>
