<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * \App\Models\User::factory(10)->create();
     * BOSMA NOTES:
     * ORDAH MATTERS! ORDAH MATTERS!
     * Still to fix: using the UserFactory.
     * :BOSMA NOTES
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UsergroupSeeder::class,
            UserSeeder::class,
            DesignerSeeder::class,
            PeriodSeeder::class,
            CollectionSeeder::class,
            ShippingclassSeeder::class,
            ProductSeeder::class,
            SaleSeeder::class,
            ShoppingcartSeeder::class,
            ShippingoptionSeeder::class,
            OrderSeeder::class,
            PaymentSeeder::class,
            ShipmentSeeder::class,
        ]);
    }
}
