$(document).ready(function(){
    let btn = $('#plus');
    let section = $('#elm');
    let minus = $('#minus');
    minus.hide();

    var i;
    var add = "<div class='row' id='elm'><div class='col-md-6'><label for='name' class='col-md-8 col-form-label'>Nom_Commercial</label><select class='form-control' id='multiselect' name='Nom_Commercial[]' required>@foreach($produits as $produit)<option value='{{$produit->Nom_Commercial}}'>{{$produit->Nom_Commercial}}</option>@endforeach]</select></div><div class='col-md-6'><label for='date' class='col-md-8 col-form-label'>{{ __('Quantité') }}</label><select class='form-control' id='multiselect' name='Nom_Commercial[]' required><option value=''>1</option><option value=''>2</option><option value=''>3</option><option value=''>4</option><option value=''>5</option></select></div></div>";
    $(btn).click(function(e){
        i++;
        e.preventDefault();
        var result = section.children('.row')[0].outerHTML;
        section.append(result);
        minus.show();
    })

   

    $(minus).click(function(e){
        // i--;
        e.preventDefault();
        $result = $('#elm').children();
        $result.last().remove();
        if($result.length < 3){
            minus.hide();
            console.log($result.length);
        }
        // console.log($result.length);
        
    })
})
