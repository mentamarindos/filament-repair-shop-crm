<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$jAaxCSyNPY9ZGdP4ubmmFOOqKwDNB/HLaUQgZzjhROIv.ybppsuG2',
                'remember_token' => 't7XwAiEIQ0Cc5izTi8Ur9NIScwUjiVfQWrJbx6FT3Y3uccT3UwEyvywF0qAs',
                'created_at' => '2023-05-03 13:13:47',
                'updated_at' => '2023-05-08 07:12:05',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Pablo Garcia',
                'email' => 'pablo@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$P3vOabdSD1NWmxxp6p7LBeE/U90JRGWZSY1793jVHZIvfiVoT6Dyq',
                'remember_token' => NULL,
                'created_at' => '2023-05-08 07:10:49',
                'updated_at' => '2023-05-08 07:12:43',
            ),
        ));
        
        
    }
}