<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'Name' => 'produit1',
                'description' => 'produit de test',
                'price'=>15,
                'stock'=>16,
                'created_at' => '2021-01-11 10:16:32'
            ],
            [
                'Name' => 'produit2',
                'description' => 'produit de test',
                'price'=>15,
                'stock'=>16,
                'created_at' => '2021-01-11 10:16:32'
            ],
        ]);
    }
}
