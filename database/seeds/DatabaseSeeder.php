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
        $this->call(RawMaterialSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(StoreSeeder::class);
        
    }
}
