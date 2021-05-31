<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();


        $admin = User::create([
            'name' => 'Rosyne Carter',
            'email' => 'admin@admin.com',
            'avatars' => 'AdminRosy.jpg',
            'password' => Hash::make('password')
        ]);

        $pharmacien = User::create([
            'name' => 'Henzo Koma',
            'email' => 'pharmacien@pharmacien.com',
            'avatars' => 'FB_IMG_16163041792772069.jpg',
            'password' => Hash::make('password')
        ]);

        $Gerant = User::create([
            'name' => 'Maikouané Merveille',
            'email' => 'gerant@gerant.com',
            'avatars' => 'Mai.jpg',
            'password' => Hash::make('password')
        ]);

        $caisse01 = User::create([
            'name' => 'Martin Koué',
            'email' => 'caisse01@caisse.com',
            'avatars' => 'user7-128x128.jpg',
            'password' => Hash::make('password')
        ]);

        $caisse02 = User::create([
            'name' => 'Barka Sambay',
            'email' => 'caisse02@caisse.com',
            'password' => Hash::make('password')
        ]);

        $caisse03 = User::create([
            'name' => 'Beverly Koma',
            'email' => 'caisse03@caisse.com',
            'password' => Hash::make('password')
        ]);

        $adminRole = Role::where('role', 'admin')->first();
        $pharmacienRole = Role::where('role', 'Pharmacien')->first();
        $gerantRole = Role::where('role', 'Gerant')->first();
        $caisse01Role = Role::where('role', 'caisse01')->first();
        $caisse02Role = Role::where('role', 'caisse02')->first();
        $caisse03Role = Role::where('role', 'caisse03')->first();

        $admin->roles()->attach($adminRole);
        $pharmacien->roles()->attach($pharmacienRole);
        $Gerant->roles()->attach($gerantRole);
        $caisse01->roles()->attach($caisse01Role);
        $caisse02->roles()->attach($caisse02Role);
        $caisse03->roles()->attach($caisse03Role);
    }
}
