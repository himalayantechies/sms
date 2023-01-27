<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('classes')->delete();
        
        \DB::table('classes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'I',
                'school_id' => 7,
                'created_at' => '2023-01-13 14:43:40',
                'updated_at' => '2023-01-13 14:43:40',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'II',
                'school_id' => 7,
                'created_at' => '2023-01-13 14:43:48',
                'updated_at' => '2023-01-13 14:43:48',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'III',
                'school_id' => 7,
                'created_at' => '2023-01-13 14:43:57',
                'updated_at' => '2023-01-13 14:43:57',
            ),
        ));
        
        
    }
}