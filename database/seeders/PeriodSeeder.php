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
    }
}
