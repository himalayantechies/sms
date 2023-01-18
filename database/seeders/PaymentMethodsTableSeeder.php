<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_methods')->delete();
        
        \DB::table('payment_methods')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'offline',
                'payment_keys' => '{}',
                'image' => 'offline.png',
                'status' => 1,
                'mode' => 'offline',
                'created_at' => '',
                'updated_at' => '',
                'school_id' => NULL,
            ),
            1 => 
            array (
                'id' => 11,
                'name' => 'paypal',
                'payment_keys' => '{"test_client_id":"snd_cl_id_xxxxxxxxxxxxx","test_secret_key":"snd_cl_sid_xxxxxxxxxxxx","live_client_id":"lv_cl_id_xxxxxxxxxxxxxxx","live_secret_key":"lv_cl_sid_xxxxxxxxxxxxxx"}',
                'image' => 'paypal.png',
                'status' => 1,
                'mode' => 'test',
                'created_at' => NULL,
                'updated_at' => NULL,
                'school_id' => 7,
            ),
            2 => 
            array (
                'id' => 12,
                'name' => 'stripe',
                'payment_keys' => '{"test_key":"pk_test_xxxxxxxxxxxxx","test_secret_key":"sk_test_xxxxxxxxxxxxxx","public_live_key":"pk_live_xxxxxxxxxxxxxx","secret_live_key":"sk_live_xxxxxxxxxxxxxx"}',
                'image' => 'stripe.png',
                'status' => 1,
                'mode' => 'test',
                'created_at' => NULL,
                'updated_at' => NULL,
                'school_id' => 7,
            ),
            3 => 
            array (
                'id' => 13,
                'name' => 'razorpay',
                'payment_keys' => '{"test_key":"rzp_test_xxxxxxxxxxxxx","test_secret_key":"rzs_test_xxxxxxxxxxxxx","live_key":"rzp_live_xxxxxxxxxxxxx","live_secret_key":"rzs_live_xxxxxxxxxxxxx","theme_color":"#c7a600"}',
                'image' => 'razorpay.png',
                'status' => 1,
                'mode' => 'test',
                'created_at' => NULL,
                'updated_at' => NULL,
                'school_id' => 7,
            ),
            4 => 
            array (
                'id' => 14,
                'name' => 'paytm',
                'payment_keys' => '{"test_merchant_id":"tm_id_xxxxxxxxxxxx","test_merchant_key":"tm_key_xxxxxxxxxx","live_merchant_id":"lv_mid_xxxxxxxxxxx","live_merchant_key":"lv_key_xxxxxxxxxxx","environment":"provide-a-environment","merchant_website":"merchant-website","channel":"provide-channel-type","industry_type":"provide-industry-type"}',
                'image' => 'paytm.png',
                'status' => 1,
                'mode' => 'test',
                'created_at' => NULL,
                'updated_at' => NULL,
                'school_id' => 7,
            ),
        ));
        
        
    }
}