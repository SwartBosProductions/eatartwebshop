<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsergroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usergroups')->insert([
            ['usergroupname' => 'personeel'],
            ['usergroupname' => 'student'],
            ['usergroupname' => 'niet-NHL']
        ]);
    }
}
