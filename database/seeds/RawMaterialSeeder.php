<?php

use Illuminate\Database\Seeder;

class RawMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $material = new App\Raw_material();
        $material->name = 'Leche';
        $material->amount = '2';
        $material->price = '10.50';
        $material->expiration = '2020-06-01';
        $material->save();
    }
}
