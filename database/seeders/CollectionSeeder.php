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
                'period_id' => 1,
                'created_by' => 1,
            ],
            [
                'collection_name' => 'EatArt Spring 2021',
                'period_id' => 2,
                'created_by' => 1,
            ],
            [
                'collection_name' => 'EatArt Autumn 2021',
                'period_id' => 3,
                'created_by' => 1,
            ],
            [
                'collection_name' => 'EatArt Valentine 2022',
                'period_id' => 3,
                'created_by' => 1,
            ],
        ]);
    }
}
