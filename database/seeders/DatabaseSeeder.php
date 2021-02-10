<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * \App\Models\User::factory(10)->create();
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UsergroupSeeder::class,
            UserSeeder::class,
        ]);
    }
}
