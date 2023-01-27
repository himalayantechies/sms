<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentGatewaysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_gateways')->delete();
        
        \DB::table('payment_gateways')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Offline',
                'status' => 1,
                'configuration' => '[]',
                'created_at' => '2023-01-13 13:25:00',
                'updated_at' => '2023-01-13 13:25:00',
            ),
        ));
        
        
    }
}