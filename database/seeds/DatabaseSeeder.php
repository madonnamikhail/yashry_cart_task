<?php

use Database\Seeders\ProductSeeder;
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
        $this->call(ProductSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(OfferSeeder::class);
        $this->call(CreateUsersSeeder::class);



    }
}
