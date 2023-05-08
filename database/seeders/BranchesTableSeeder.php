<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BranchesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('branches')->delete();
        
        \DB::table('branches')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Barlett Sede - Madrid',
                'address' => 'Calle Princesa #30, 1ro A',
                'company_id' => 2,
                'created_at' => '2023-05-05 10:40:48',
                'updated_at' => '2023-05-05 10:44:08',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Sullivan de Bilbao',
                'address' => 'Calle Las Flores #40',
                'company_id' => 1,
                'created_at' => '2023-05-05 10:47:21',
                'updated_at' => '2023-05-05 10:47:33',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Ava James',
                'address' => 'Tenetur dolorum amet ut nostrum aut cum voluptatem dolorem ex pariatur Dicta veniam ut eius',
                'company_id' => 2,
                'created_at' => '2023-05-05 10:47:51',
                'updated_at' => '2023-05-05 10:47:51',
            ),
        ));
        
        
    }
}