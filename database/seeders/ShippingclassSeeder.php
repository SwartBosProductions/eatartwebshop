<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingclassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shippingclasses')->insert([
            [
                'shippingclass_name' => 'brief',
                'price' => 0.96,
                'created_by' => 1,
            ],
            [
                'shippingclass_name' => 'Brievenbuspakket',
                'price' => 3.95,
                'created_by' => 1,
            ],
            [
                'shippingclass_name' => 'Pakket',
                'price' => 5.75,
                'created_by' => 1,
            ],
            [
                'shippingclass_name' => 'Zwaar pakket (10-20kg)',
                'price' => 8.75,
                'created_by' => 1,
            ],
        ]);
    }
}
