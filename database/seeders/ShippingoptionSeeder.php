<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingoptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * BOSMA NOTES: 
     * This table doesn't make sense, I think we don't need it.
     * The problem is we can hardcode pick-up (it's for free), but we canont hardcode shipping. It depends on the weight of the order (and maybe the volume as well but let's keep it simple).
     * A product can be a card only, but it can also be a small statue. Volume won't be an issue because it's EatArt (should fit in snack machine).
     * So the product table should have a weight column.
     * The order table should have a boolean or enum: ship true/false OR ship or pickup.
     * In the controller we will take care of calculating the shipping costs (if any) and the total amount.
     * When a shopping cart becomes an order we will use those calculating methods to fill the order table.
     * :BOSMA NOTES
     * @return void
     */
    public function run()
    {
        DB::table('shippingoptions')->insert([
            [
                'shippingoption_name' => 'Pick up',
                'price' => 0,
                'created_by' => 1
            ],
            [
                'shippingoption_name' => 'Ship',
                'price' => 5.75,
                'created_by' => 1
            ]
        ]);
    }
}
