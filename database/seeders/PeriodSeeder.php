<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periods')->insert([
            [
                'period_name' => 'history',
                'created_by' => 1,
            ],
            [
                'period_name' => 'current',
                'created_by' => 1,
            ],
            [
                'period_name' => 'future',
                'created_by' => 1,
            ],
        ]);

        DB::table('collection_period')->insert([
            [
                'collection_id' => 1,
                'period_id' => 1,
            ],
            [
                'collection_id' => 2,
                'period_id' => 2,
            ],
            [
                'collection_id' => 3,
                'period_id' => 3,
            ],
            [
                'collection_id' => 4,
                'period_id' => 3,
            ],
        ]);
    }
}
