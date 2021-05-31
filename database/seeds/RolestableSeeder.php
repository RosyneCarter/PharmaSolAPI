<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolestableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['role' => 'admin']);
        Role::create(['role' => 'Pharmacien']);
        Role::create(['role' => 'Gerant']);
        Role::create(['role' => 'Caisse01']);
        Role::create(['role' => 'Caisse02']);
        Role::create(['role' => 'Caisse03']);
        Role::create(['role' => 'fournisseur']);
    }
}
