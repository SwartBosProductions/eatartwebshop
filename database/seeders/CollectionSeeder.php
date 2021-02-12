<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('collections')->insert([
            [
                'collection_name' => 'EatArt Christmas 2020',
                'created_by' => 1,
            ],
            [
                'collection_name' => 'EatArt Spring 2021',
                'created_by' => 1,
            ],
            [
                'collection_name' => 'EatArt Autumn 2021',
                'created_by' => 1,
            ],
            [
                'collection_name' => 'EatArt Valentine 2022',
                'created_by' => 1,
            ],
        ]);
    }
}
