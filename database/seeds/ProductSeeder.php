<?php

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
        $product = new App\Product();
        $product->name = 'Manchego';
        $product->weight = '1.05';
        $product->price = '10.50';
        $product->save();

        $product = new App\Product();
        $product->name = 'Cheddar';
        $product->weight = '1.5';
        $product->price = '10.50';
        $product->save();

        $product = new App\Product();
        $product->name = 'Mozarella';
        $product->weight = '2';
        $product->price = '10.50';
        $product->save();

        $product = new App\Product();
        $product->name = 'adobera';
        $product->weight = '1.2';
        $product->price = '10.50';
        $product->save();
    }
}
