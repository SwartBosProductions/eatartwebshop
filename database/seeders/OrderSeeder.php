<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'shoppingcart_id' => 2,
                'shippingoption_id' => 1,
                'created_by' => 1,
            ]
        ]);
    }
}
