<?php

namespace Database\Seeders;

use App\Models\Utilisateur; // Utilisez la classe avec un U majuscule.
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Utilisation de la factory pour générer 2 utilisateurs aléatoires
        Utilisateur::factory(2)->create();

        // Insertion des utilisateurs admin et user manuellement
        DB::table('utilisateurs')->insert([
            [
                'login' => 'admin',
                'password' => Hash::make('admin'), // Hachage du mot de passe
                'type' => 'admin',
            ],
            [
                'login' => 'user',
                'password' => Hash::make('user'), // Hachage du mot de passe
                'type' => 'user',
            ]
        ]);
    }
}