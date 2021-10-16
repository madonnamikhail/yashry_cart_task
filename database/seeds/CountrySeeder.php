<?php

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $countries = [
            [
                'name' => 'US',
                'rate' => 2,
                'product_id'=>5
            ],
            [
                'name' => 'US',
                'rate' => 2,
                'product_id'=>1
            ],
            [
                'name' => 'UK',
                'rate' => 3,
                'product_id'=>2

            ],
            [
                'name' => 'UK',
                'rate' => 3,
                'product_id'=>3

            ],
            [
                'name' => 'CN',
                'rate' => 2 ,
                'product_id'=>4

            ],
            [
                'name' => 'CN',
                'rate' => 2 ,
                'product_id'=>6

            ]
        ];

        foreach ($countries as $key => $value) {
            Country::create($value);
        }
    }
}
