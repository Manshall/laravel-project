<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::Create([
            'code'=>'8755526',
            'name'=>'Aoka',
            'price'=>2000,
        ]);
        Product::Create([
            'code'=>'986347665',
            'name'=>'sunligth 650ml',
            'price'=>2000,
        ]);
        Product::Create([
            'code'=>'4275566763',
            'name'=>'le mineral',
            'price'=>2500,
        ]);
        Product::Create([
            'code'=>'68885342',
            'name'=>'aqua',
            'price'=>3000,
        ]);
        Product::Create([
            'code'=>'66544763',
            'name'=>'pepsodent',
            'price'=>4000,
        ]);
    }
}
