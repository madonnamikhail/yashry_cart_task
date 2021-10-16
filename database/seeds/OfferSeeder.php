<?php

use App\Models\Offer;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $offers = [
            [
                'name' => 'shoes',
                'value' => 0.10,
                'product_id'=>6
            ],
            [
                'name' => 'jacket',
                'value' => 0.50,
                'product_id'=>6

            ]
        ];

        foreach ($offers as $key => $value) {
            Offer::create($value);
        }
    }
}
