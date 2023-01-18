<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sections')->delete();
        
        \DB::table('sections')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'A',
                'class_id' => 1,
                'created_at' => '2023-01-13 14:43:40',
                'updated_at' => '2023-01-13 14:44:37',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'A',
                'class_id' => 2,
                'created_at' => '2023-01-13 14:43:48',
                'updated_at' => '2023-01-13 14:43:48',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'A',
                'class_id' => 3,
                'created_at' => '2023-01-13 14:43:57',
                'updated_at' => '2023-01-13 14:43:57',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'B',
                'class_id' => 1,
                'created_at' => '2023-01-13 14:44:37',
                'updated_at' => '2023-01-13 14:44:37',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'C',
                'class_id' => 1,
                'created_at' => '2023-01-13 14:44:37',
                'updated_at' => '2023-01-13 14:44:37',
            ),
        ));
        
        
    }
}