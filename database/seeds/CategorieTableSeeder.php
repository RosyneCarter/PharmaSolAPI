<?php

use App\Type;
use App\Forme;
use App\Categorie;
use App\statut;
use Laravel\Ui\Presets\Vue;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorie1 = Categorie::create([
            'categorie' => 'Antibiotique',
        ]);
        $categorie1 = Categorie::create([
            'categorie' => 'Antifongique',
        ]);
        $categorie2 = Categorie::create([
            'categorie' => 'Antiparasitaire',
        ]);
        $categorie3 = Categorie::create([
            'categorie' => 'Antalgique',
        ]);
        $categorie4 = Categorie::create([
            'categorie' => 'Antalgique',
        ]);
        $categorie5 = Categorie::create([
            'categorie' => 'Antimigraineux',
        ]);
        $categorie6 = Categorie::create([
            'categorie' => 'Antiinflammatoire',
        ]);
        $categorie7 = Categorie::create([
            'categorie' => 'Gastrologie',
        ]);
        $categorie7 = Categorie::create([
            'categorie' => 'Gastrologie',
        ]);
        $categorie8 = Categorie::create([
            'categorie' => 'Pneumologie',
        ]);
        $categorie9 = Categorie::create([
            'categorie' => 'Cardiologie',
        ]);
        $categorie10 = Categorie::create([
            'categorie' => 'Hematologie',
        ]);
        $categorie11 = Categorie::create([
            'categorie' => 'Dermatologie',
        ]);
        $categorie12 = Categorie::create([
            'categorie' => 'Ophtalmologie',
        ]);
        $categorie13 = Categorie::create([
            'categorie' => 'Rhumatologie',
        ]);
        $categorie14 = Categorie::create([
            'categorie' => 'Metabolisme',
        ]);
        $categorie15 = Categorie::create([
            'categorie' => 'Trouble Genico-Urinaire',
        ]);
        $categorie16 = Categorie::create([
            'categorie' => 'Gynecologie',
        ]);
        $categorie17 = Categorie::create([
            'categorie' => 'Psychiatrie',
        ]);
        $categorie18 = Categorie::create([
            'categorie' => 'Neurologie',
        ]);
        $categorie19 = Categorie::create([
            'categorie' => 'Autres',
        ]);

        $type1 = Type::create([
            'type' => 'Curatif',
        ]);

        $type3 = Type::create([
            'type' => 'Preventif',
        ]);
      
        $forme1 = Forme::create([
            'forme' => 'Comprimé',
        ]);

        $forme2 = Forme::create([
            'forme' => 'Sirop',
        ]);

        $forme3 = Forme::create([
            'forme' => 'Injectable',
        ]);
        
        $forme5 = Forme::create([
            'forme' => 'Pommade',
        ]);

        $forme6 = Forme::create([
            'forme' => 'Créme',
        ]);

        $forme7 = Forme::create([
            'forme' => 'Collyre',
        ]);

        $statuts = ['En attente', 'Annulée', 'Livrée', 'Validée'];
        foreach ($statuts as $key => $value) {
            statut::create([
                'nom' => $value,
            ]);
        }
    }
}
