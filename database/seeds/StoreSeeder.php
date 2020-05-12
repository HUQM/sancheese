<?php

use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $storeP = new App\Store();
        $storeP->product_id = '1';
        $storeP->amount = '2';
        $storeP->elaboration = '2020-05-06';
        $storeP->expiration = '2020-05-13';
        $storeP->save();

        $storeP = new App\Store();
        $storeP->product_id = '2';
        $storeP->amount = '3';
        $storeP->elaboration = '2020-05-06';
        $storeP->expiration = '2020-05-13';
        $storeP->save();

        $storeP = new App\Store();
        $storeP->product_id = '3';
        $storeP->amount = '4';
        $storeP->elaboration = '2020-05-06';
        $storeP->expiration = '2020-05-13';
        $storeP->save();

        $storeP = new App\Store();
        $storeP->product_id = '4';
        $storeP->amount = '5';
        $storeP->elaboration = '2020-05-06';
        $storeP->expiration = '2020-05-13';
        $storeP->save();
    }
}
