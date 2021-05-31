<?php

use App\Categorie;
use App\produit;
use App\prix;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prixes1 = Prix::create([
            'prix' => 100,        ]);
        $prixes2 = Prix::create([
            'prix' => 200,        ]);
        $prixes3 = Prix::create([
            'prix' => 300,        ]);
        $prixes4 = Prix::create([
            'prix' => 400,        ]);
        $prixes5 = Prix::create([
            'prix' => 100,        ]);
        $prixes6 = Prix::create([
            'prix' => 200,        ]);
        $prixes7 = Prix::create([
            'prix' => 1000,        ]);
        $prixes8 = Prix::create([
            'prix' => 1200,        ]);
        $prixes9 = Prix::create([
            'prix' => 3000,        ]);
        $prixes10 = Prix::create([
            'prix' => 350,
        ]);
        $prixes11 = Prix::create([
            'prix' => 250,
        ]);
        $prixes12 = Prix::create([
            'prix' => 100,
        ]);
        $prixes13 = Prix::create([
            'prix' => 300,
        ]);
        $prixes14 = Prix::create([
            'prix' => 200,
        ]);
        $prixes15 = Prix::create([
            'prix' => 400,
        ]);
        $prixes16 = Prix::create([
            'prix' => 500,
        ]);
        $prixes17 = Prix::create([
            'prix' => 150,
        ]);
        $prixes18 = Prix::create([
            'prix' => 750,
        ]);
        $prixes19 = Prix::create([
            'prix' => 200,
        ]);
        $prixes20 = Prix::create([
            'prix' => 3000,
        ]);
        $prixes21 = Prix::create([
            'prix' => 200,
        ]);

        $produits1 = produit::create([
            'Numéro_Lot' => '224',
            'date_Exp'  => '2021-05-03',
            'Nom_Commercial' => 'Paracetamol',
            'Quantité' => '300',
            'Emplacement' => 'ES50',
            'Dosage' => '100mg',
            'forme_id' => 1,
            'type_id' => 2,
            'categorie_id' => 1,
            'prix_id' => 1,
        ]);

        $produits2 = produit::create([
            'Numéro_Lot' => '234',
            'date_Exp'  => '2024-10-06',
            'Nom_Commercial' => 'Doliprane',
            'Quantité' => '500',
            'Emplacement' => 'ES20',
            'Dosage' => '300mg',
            'forme_id' => 2,
            'type_id' => 1,
            'categorie_id' => 2,
            'prix_id' => 1,           
    ]);

        $produits3 = produit::create([
            'Numéro_Lot' => '214',
            'date_Exp'  => '2023-02-13',
            'Nom_Commercial' => 'Vermox',
            'Quantité' => '1000',
            'Emplacement' => 'ES30',
            'Dosage' => '150mg',
            'forme_id' => 3,
            'type_id' => 2,
            'categorie_id' => 3,
            'prix_id' => 1,           
 ]);
        $produits4 = produit::create([
            'Numéro_Lot' => '224',
            'date_Exp'  => '2021-05-03',
            'Nom_Commercial' => 'Cephalex',
            'Quantité' => '300',
            'Emplacement' => 'ES40',
            'Dosage' => '100mg',
            'forme_id' => 4,
            'type_id' => 1,
            'categorie_id' => 4,
            'prix_id' => 3,    
        ]);
        $produits5 = produit::create([
            'Numéro_Lot' => '224',
            'date_Exp'  => '2021-05-03',
            'Nom_Commercial' => 'Bactrim',
            'Quantité' => '1000',
            'Emplacement' => 'ES50',
            'Dosage' => '300mg',
            'forme_id' => 5,
            'type_id' => 2,
            'categorie_id' => 5,
            'prix_id' => 4, 
           ]);
        $produits6 = produit::create([
            'Numéro_Lot' => '224',
            'date_Exp'  => '2021-05-03',
            'Nom_Commercial' => 'Dermofix',
            'Quantité' => '2000',
            'Emplacement' => 'ES60',
            'Dosage' => '100mg',
            'forme_id' => 6,
            'type_id' => 1,
            'categorie_id' => 6,
            'prix_id' => 4,
        ]);
        $produits7 = produit::create([
            'Numéro_Lot' => '224',
            'date_Exp'  => '2021-05-03',
            'Nom_Commercial' => 'Amodex',
            'Quantité' => '600',
            'Emplacement' => 'ES70',
            'Dosage' => '300mg',
            'forme_id' => 5,
            'type_id' => 2,
            'categorie_id' => 7,
            'prix_id' => 1,            
]);
        $produits8 = produit::create([
            'Numéro_Lot' => '224',
            'date_Exp'  => '2021-05-03',
            'Nom_Commercial' => 'malacure',
            'Quantité' => '100',
            'Emplacement' => 'ES80',
            'Dosage' => '200mg',
            'forme_id' => 1,
            'type_id' => 1,
            'categorie_id' => 8,
            'prix_id' => 1,
            ]);
        $produits9 = produit::create([
            'Numéro_Lot' => '224',
            'date_Exp'  => '2021-05-03',
            'Nom_Commercial' => 'Kétoconazole',
            'Quantité' => '70',
            'Emplacement' => 'ES90',
            'Dosage' => '300mg',
            'forme_id' => 2,
            'type_id' => 2,
            'categorie_id' => 9,
            'prix_id' => 1,           
 ]);
        $produits10 = produit::create([
            'Numéro_Lot' => '224',
            'date_Exp'  => '2021-05-03',
            'Nom_Commercial' => 'Helmenthox',
            'Quantité' => '200',
            'Emplacement' => 'ES10',
            'Dosage' => '500mg',
            'forme_id' => 3,
            'type_id' => 1,
            'categorie_id' => 10,
            'prix_id' => 5,
        ]);
        $produits11 = produit::create([
            'Numéro_Lot' => '224',
            'date_Exp'  => '2021-05-03',
            'Nom_Commercial' => 'Glucantine',
            'Quantité' => '700',
            'Emplacement' => 'ES20',
            'Dosage' => '300mg',
            'forme_id' => 4,
            'type_id' => 2,
            'categorie_id' => 11,
            'prix_id' => 4,
        ]);
        $produits12 = produit::create([
            'Numéro_Lot' => '224',
            'date_Exp'  => '2021-05-03',
            'Nom_Commercial' => 'Combantrin',
            'Quantité' => '100',
            'Emplacement' => 'ES30',
            'Dosage' => '200mg',
            'forme_id' => 5,
            'type_id' => 1,
            'categorie_id' => 12,
            'prix_id' => 5,
        ]);
        $produits13 = produit::create([
            'Numéro_Lot' => '224',
            'date_Exp'  => '2021-05-03',
            'Nom_Commercial' => 'Dalamol',
            'Quantité' => '90',
            'Emplacement' => 'ES40',
            'Dosage' => '100mg',
            'forme_id' => 6,
            'type_id' => 2,
            'categorie_id' => 13,
            'prix_id' => 1,
        ]);
        $produits14 = produit::create([
            'Numéro_Lot' => '224',
            'date_Exp'  => '2021-05-03',
            'Nom_Commercial' => 'Tramadol',
            'Quantité' => '50',
            'Emplacement' => 'ES50',
            'Dosage' => '300mg',
            'forme_id' => 5,
            'type_id' => 1,
            'categorie_id' => 14,
            'prix_id' => 4,
        ]);
        $produits15 = produit::create([
            'Numéro_Lot' => '224',
            'date_Exp'  => '2021-05-03',
            'Nom_Commercial' => 'Laroxyl',
            'Quantité' => '90',
            'Emplacement' => 'ES60',
            'Dosage' => '200mg',
            'forme_id' => 1,
            'type_id' => 2,
            'categorie_id' => 15,
            'prix_id' => 4,
        ]);
        $produits16 = produit::create([
            'Numéro_Lot' => '224',
            'date_Exp'  => '2021-05-03',
            'Nom_Commercial' => 'Indogesic',
            'Quantité' => '80',
            'Emplacement' => 'ES70',
            'Dosage' => '300mg',
            'forme_id' => 2,
            'type_id' => 1,
            'categorie_id' => 16,
            'prix_id' => 4,
        ]);
        $produits17 = produit::create([
            'Numéro_Lot' => '224',
            'date_Exp'  => '2021-05-03',
            'Nom_Commercial' => 'Upfen',
            'Quantité' => '100',
            'Emplacement' => 'ES80',
            'Dosage' => '100mg',
            'forme_id' => 3,
            'type_id' => 2,
            'categorie_id' => 17,
            'prix_id' => 1,
        ]);
        $produits18 = produit::create([
            'Numéro_Lot' => '224',
            'date_Exp'  => '2021-05-03',
            'Nom_Commercial' => 'bufen',
            'Quantité' => '1000',
            'Emplacement' => 'ES90',
            'Dosage' => '300mg',
            'forme_id' => 4,
            'type_id' => 1,
            'categorie_id' => 18,
            'prix_id' => 1,
        ]);
        $produits19 = produit::create([
            'Numéro_Lot' => '224',
            'date_Exp'  => '2021-05-03',
            'Nom_Commercial' => 'Diprostene',
            'Quantité' => '300',
            'Emplacement' => 'ES10',
            'Dosage' => '200mg',
            'forme_id' => 5,
            'type_id' => 2,
            'categorie_id' => 19,
            'prix_id' => 1,            
]);
        $produits20 = produit::create([
            'Numéro_Lot' => '224',
            'date_Exp'  => '2021-05-03',
            'Nom_Commercial' => 'Votrex',
            'Quantité' => '80',
            'Emplacement' => 'ES30',
            'Dosage' => '300mg',
            'forme_id' => 6,
            'type_id' => 1,
            'categorie_id' => 4,
            'prix_id' => 1,
            ]);
        $produits21 = produit::create([
            'Numéro_Lot' => '224',
            'date_Exp'  => '2021-05-03',
            'Nom_Commercial' => 'Celebrex',
            'Quantité' => '150',
            'Emplacement' => 'ES50',
            'Dosage' => '100mg',
            'forme_id' => 5,
            'type_id' => 2,
            'categorie_id' => 19,
            'prix_id' => 5,
        ]);
        

       
    }
}




