<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
            [
                'order_id' => 1,
                'payment_date' => '2021-02-11 00:00:00',
                'created_by' => 1,
            ]
        ]);
    }
}
