<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'role_id' => 1,
                'name' => 'superadmin',
                'created_at' => '2022-05-17 12:59:27',
                'updated_at' => '2022-05-17 12:59:27',
            ),
            1 => 
            array (
                'role_id' => 2,
                'name' => 'admin',
                'created_at' => '2022-05-17 12:59:27',
                'updated_at' => '2022-05-17 12:59:27',
            ),
            2 => 
            array (
                'role_id' => 3,
                'name' => 'teacher',
                'created_at' => '2022-05-17 13:00:14',
                'updated_at' => '2022-05-17 12:59:27',
            ),
            3 => 
            array (
                'role_id' => 4,
                'name' => 'accountant',
                'created_at' => '2022-05-17 13:00:14',
                'updated_at' => '2022-05-17 12:59:27',
            ),
            4 => 
            array (
                'role_id' => 5,
                'name' => 'librarian',
                'created_at' => '2022-05-17 13:00:14',
                'updated_at' => '2022-05-17 12:59:27',
            ),
            5 => 
            array (
                'role_id' => 6,
                'name' => 'parent',
                'created_at' => '2022-05-17 13:00:14',
                'updated_at' => '2022-05-17 12:59:27',
            ),
            6 => 
            array (
                'role_id' => 7,
                'name' => 'student',
                'created_at' => '2022-05-17 13:00:14',
                'updated_at' => '2022-05-17 12:59:27',
            ),
        ));
        
        
    }
}