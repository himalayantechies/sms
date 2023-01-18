<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('schools')->delete();
        
        \DB::table('schools')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Patan High School',
                'email' => 'patanhss@gmail.com',
                'phone' => '9803020420',
                'address' => 'Patan Dhoka, Lalitpur 44600, Nepal',
                'school_info' => 'school info',
                'status' => 2,
                'running_session' => 2,
                'created_at' => '2023-01-13 13:08:59',
                'updated_at' => '2023-01-13 13:08:59',
                'school_currency' => NULL,
                'currency_position' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Patan High School',
                'email' => 'patanhss@gmail.com',
                'phone' => '9803020420',
                'address' => 'Patan Dhoka, Lalitpur 44600, Nepal',
                'school_info' => 'school info',
                'status' => 2,
                'running_session' => 3,
                'created_at' => '2023-01-13 13:09:19',
                'updated_at' => '2023-01-13 13:09:19',
                'school_currency' => NULL,
                'currency_position' => NULL,
            ),
        ));
        
        
    }
}