<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('companies')->delete();
        
        \DB::table('companies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Sullivan Tech',
                'email' => 'qulal@mailinator.com',
                'created_at' => '2023-05-05 09:51:49',
                'updated_at' => '2023-05-05 09:52:45',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Bartlett Repairs',
                'email' => 'lowyviw@mailinator.com',
                'created_at' => '2023-05-05 09:51:58',
                'updated_at' => '2023-05-05 09:52:34',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Fatima Garcia LLC',
                'email' => 'qypemyva@mailinator.com',
                'created_at' => '2023-05-05 09:52:09',
                'updated_at' => '2023-05-05 09:52:19',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Patricia Wilkerson',
                'email' => 'cuqu@mailinator.com',
                'created_at' => '2023-05-05 09:55:57',
                'updated_at' => '2023-05-05 09:55:57',
            ),
        ));
        
        
    }
}