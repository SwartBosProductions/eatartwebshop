<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShoppingcartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * BOSMA NOTES:
     * Basically we created a pivot table for a shopping cart. 
     * But that means that a shopping cart can contain only one product. If you put in more product-id's into one shoppingcart instance, only the last product 'wins'. 
     * And if you create two rows for one user who wants two product, than he has two shoppingcarts.
     * This is not what we want.
     * I will look into the shopping cart package and try to implement it, or to deduct how to build one.
     * :BOSMA NOTES
     * @return void
     */
    public function run()
    {
        DB::table('shoppingcarts')->insert([
            [
                'user_id' => 6,
                'product_id' => 1,
                'created_by' => 6,
            ],
            [
                'user_id' => 8,
                'product_id' => 3,
                'product_id' => 5,
                'created_by' => 8,
            ],
            // [
            //     'user_id' => 8,
            //     'product_id' => 5,
            //     'created_by' => 8,
            // ],
        ]);
    }
}
