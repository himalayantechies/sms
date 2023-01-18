<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SessionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sessions')->delete();
        
        \DB::table('sessions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'session_title' => '2023',
                'status' => 1,
                'school_id' => NULL,
                'created_at' => '2023-01-13 12:28:49',
                'updated_at' => '2023-01-13 12:28:49',
            ),
            1 => 
            array (
                'id' => 2,
                'session_title' => '2023',
                'status' => 1,
                'school_id' => 1,
                'created_at' => '2023-01-13 13:08:59',
                'updated_at' => '2023-01-13 13:08:59',
            ),
            2 => 
            array (
                'id' => 3,
                'session_title' => '2023',
                'status' => 1,
                'school_id' => 2,
                'created_at' => '2023-01-13 13:09:19',
                'updated_at' => '2023-01-13 13:09:19',
            ),
        ));
        
        
    }
}