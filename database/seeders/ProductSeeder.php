<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'designer_id' => 1,
                'collection_id' => 2,
                'shippingclass_id' => 2,
                'product_name' => 'Technico 1',
                'serie_name' => 'Technico',
                'picture' => 'https://images.kunstveiling.be/tmp-de5542f2e219b01f00fc5e1eea35cfd8-bob-kemper_d700.jpeg',
                'description' => 'Eerste van vier abstracte zeefdrukken met als onderwerp techniek in de jaren negentig.',
                'price' => '19,99',
                'created_by' => 3,
            ],
            [
                'designer_id' => 1,
                'collection_id' => 2,
                'shippingclass_id' => 2,
                'product_name' => 'Technico 2',
                'serie_name' => 'Technico',
                'picture' => 'https://images.kunstveiling.be/tmp-285264e866b5c397fd51f5f92754baa6-bob-kemper_d700.jpeg',
                'description' => 'Tweede van vier abstracte zeefdrukken met als onderwerp techniek in de jaren negentig.',
                'price' => '19,99',
                'created_by' => 3,
            ],
            [
                'designer_id' => 1,
                'collection_id' => 2,
                'shippingclass_id' => 2,
                'product_name' => 'Technico 3',
                'serie_name' => 'Technico',
                'picture' => 'https://images.kunstveiling.be/tmp-b144803bcd0b55d6ca10f383383be096-bob-kemper_d700.jpeg',
                'description' => 'Derde van vier abstracte zeefdrukken met als onderwerp techniek in de jaren negentig.',
                'price' => '19,99',
                'created_by' => 3,
            ],
            [
                'designer_id' => 1,
                'collection_id' => 2,
                'shippingclass_id' => 2,
                'product_name' => 'Technico 4',
                'serie_name' => 'Technico',
                'picture' => 'https://images.kunstveiling.be/tmp-fa3c4c1629ae8fc8611b7e862cd15bb7-bob-kemper_d700.jpeg',
                'description' => 'Vierde van vier abstracte zeefdrukken met als onderwerp techniek in de jaren negentig.',
                'price' => '19,99',
                'created_by' => 3,
            ],
            [
                'designer_id' => 2,
                'collection_id' => 2,
                'shippingclass_id' => 2,
                'product_name' => 'Huis in de Wind 1',
                'serie_name' => 'Huizen in de Wind',
                'picture' => '',
                'description' => '',
                'price' => '',
                'created_by' => 3,
            ],
        ]);
    }
}
