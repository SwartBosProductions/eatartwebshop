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
            ['usergroupname' => 'staff'],
            ['usergroupname' => 'student'],
            ['usergroupname' => 'outsider']
        ]);
    }
}
