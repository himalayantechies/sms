<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('packages')->delete();
        
        \DB::table('packages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Basic',
                'price' => '15000',
                'package_type' => 'paid',
                'interval' => 'Yearly',
                'days' => 1,
                'status' => 1,
                'description' => 'Basic package',
                'created_at' => '2023-01-13 13:24:37',
                'updated_at' => '2023-01-13 13:24:37',
            ),
        ));
        
        
    }
}