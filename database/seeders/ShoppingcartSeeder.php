<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShoppingcartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
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
                'product_id' => 5,
                'created_by' => 8,
            ],
        ]);
    }
}
