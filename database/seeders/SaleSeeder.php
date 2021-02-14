<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            [
                'sale_name' => 'Clear-out sale 2020',
                'start_sale' => '2020-12-01 00:00:00',
                'end_sale' => '2021-01-01 00:00:00',
                'created_by' => 1,
            ],
            [
                'sale_name' => 'Spring Sale 2021',
                'start_sale' => '2021-02-01 00:00:00',
                'end_sale' => '2021-05-01 00:00:00',
                'created_by' => 1,
            ],
            [
                'sale_name' => 'Clear-out sale 2021',
                'start_sale' => '2021-12-01 00:00:00',
                'end_sale' => '2022-01-01 00:00:00',
                'created_by' => 1,
            ]
        ]);

        DB::table('product_sale')->insert([
            [
                'product_id' => 1,
                'sale_id' => 2,
            ],
            [
                'product_id' => 2,
                'sale_id' => 2,
            ],
            [
                'product_id' => 3,
                'sale_id' => 2,
            ],
            [
                'product_id' => 4,
                'sale_id' => 2,
            ],
            [
                'product_id' => 5,
                'sale_id' => 2,
            ],
            [
                'product_id' => 6,
                'sale_id' => 2,
            ],
            [
                'product_id' => 7,
                'sale_id' => 2,
            ],
            [
                'product_id' => 8,
                'sale_id' => 2,
            ],
            [
                'product_id' => 1,
                'sale_id' => 1,
            ],
            [
                'product_id' => 3,
                'sale_id' => 3,
            ],
            [
                'product_id' => 5,
                'sale_id' => 3,
            ],
            [
                'product_id' => 7,
                'sale_id' => 1,
            ],
        ]);
    }
}
