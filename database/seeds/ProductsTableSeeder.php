<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {     
        Product::create([
            'name'      =>  1,
            'code'      =>  1,
            'amount'      =>  5000,
            'payout'      =>  50000,
        ]);

        Product::create([
            'name'      =>  2,
            'code'      =>  2,
            'amount'      =>  10000,
            'payout'      =>  100000,
        ]);

        Product::create([
            'name'      =>  3,
            'code'      =>  3,
            'amount'      =>  15000,
            'payout'      =>  150000,
        ]);

        Product::create([
            'name'      =>  4,
            'code'      =>  4,
            'amount'      =>  20000,
            'payout'      =>  200000,
        ]);

        Product::create([
            'name'      =>  5,
            'code'      =>  5,
            'amount'      =>  25000,
            'payout'      =>  250000,
        ]);

        Product::create([
            'name'      =>  6,
            'code'      =>  6,
            'amount'      =>  30000,
            'payout'      =>  300000,
        ]);

        Product::create([
            'name'      =>  7,
            'code'      =>  7,
            'amount'      =>  40000,
            'payout'      =>  400000,
        ]);

        Product::create([
            'name'      =>  8,
            'code'      =>  8,
            'amount'      =>  50000,
            'payout'      =>  500000,
        ]);

        Product::create([
            'name'      =>  9,
            'code'      =>  9,
            'amount'      =>  60000,
            'payout'      =>  600000,
        ]);

        Product::create([
            'name'      =>  10,
            'code'      =>  10,
            'amount'      =>  100000,
            'payout'      =>  1000000,
        ]);
    }
}
