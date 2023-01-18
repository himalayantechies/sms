<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubscriptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subscriptions')->delete();
        
        \DB::table('subscriptions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'package_id' => 1,
                'school_id' => 7,
                'paid_amount' => 15000.0,
                'payment_method' => 'Offline',
            'transaction_keys' => '{"document_file":"Simulator Screen Shot - iPad Pro (12.9-inch) (6th generation) - 2022-12-26 at 12.10.57.png"}',
                'expire_date' => 1705130720,
                'date_added' => 1673546400,
                'active' => 1,
                'status' => 1,
                'created_at' => '2023-01-13 13:25:20',
                'updated_at' => '2023-01-13 13:25:20',
            ),
        ));
        
        
    }
}