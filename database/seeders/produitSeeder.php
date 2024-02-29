<?php

namespace Database\Seeders;

use App\Models\produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('produits')->insert([
        //     [
        //         'RefPdt'=>'P0003'
        //         , 'libPdt'=>'SMART PHONE'
        //         , 'Prix'=>'5780'
        //         , 'Qte'=>'10'
        //         , 'description'=>'SMART PHONE'
        //         , 'image'=>'iphone.jpg'
        //         , 'type_id'=>1
        //     ],
        //     [
        //         'RefPdt'=>'P001'
        //         , 'libPdt'=>'SMART TV'
        //         , 'Prix'=>'4500'
        //         , 'Qte'=>'5'
        //         , 'description'=>'Smart tv marque SONY'
        //         , 'image'=>'photos/tvsmart.jpg'
        //         , 'type_id'=>1
        //     ],
        //     [
        //         'RefPdt'=>'P002'
        //         , 'libPdt'=>'SMART TV'
        //         , 'Prix'=>'5000'
        //         , 'Qte'=>'3'
        //         , 'description'=>'Smart tv marque LG'
        //         , 'image'=>'photos/tvsmartlg.jpg'
        //         , 'type_id'=>1
        //     ],
            
        // ]);
        produit::factory(3)->create();
    }
}
