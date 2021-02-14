<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shipments')->insert([
            [
                'order_id' => 1,
                'shipment_status' => 'Sent',
                'shipment_code' => '3SBCC000123456',
                'shipment_date' => '2021-02-15 12:54:00',
                'created_by' => 1,
            ]
        ]);
    }
}
