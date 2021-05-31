<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolestableSeeder::class);

        $this->call(UsersTableSeeder::class);

        $this->call(FournisseursTableSeeder::class);

        $this->call(CategorieTableSeeder::class);
        
        $this->call(ProduitsTableSeeder::class);
    }
}
