<?php
use App\Role;
use App\Fournisseurs;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FournisseursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fournisseurs::truncate();
        DB::table('role_fournisseurs')->truncate();


        $fournisseurs = Fournisseurs::create([
            'name' => 'DuplexPharma',
            'email' => 'admin@admin.com',
            'adresse' => 'Axe CA7 Ndjamena',
            'contact' => '+237659402524'
        ]);
        $fournisseurs1 = Fournisseurs::create([
            'name' => 'Rosyne',
            'email' => 'rosynekopelda@gmail.com',
            'adresse' => 'Axe CA7 Ndjamena',
            'contact' => '+237659402524'
        ]);
       
    }
}

