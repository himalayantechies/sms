<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentHistoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_history')->delete();
        
        \DB::table('payment_history')->insert(array (
            0 => 
            array (
                'id' => 1,
                'payment_type' => 'subscription',
                'user_id' => 2,
                'course_id' => NULL,
                'package_id' => 1,
                'amount' => 15000.0,
                'school_id' => 7,
                'transaction_keys' => '[]',
            'document_image' => 'Simulator Screen Shot - iPad Pro (12.9-inch) (6th generation) - 2022-12-26 at 12.10.57.png',
                'paid_by' => 'offline',
                'status' => 'approve',
                'timestamp' => 1673594700,
                'created_at' => '2023-01-13 13:25:00',
                'updated_at' => '2023-01-13 13:25:20',
            ),
        ));
        
        
    }
}