<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('clients')->delete();
        
        \DB::table('clients')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Ferris Mcfadden',
                'surname' => 'Stone',
                'address' => 'Et officia ea minim provident vero neque non et et consequatur Porro incidunt necessitatibus fugit ad corporis',
                'email' => 'bomef@mailinator.com',
                'phone' => '891648486048',
                'created_at' => '2023-05-05 07:54:09',
                'updated_at' => '2023-05-05 10:02:55',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Nyssa Oconnor',
                'surname' => 'Riggs',
                'address' => 'Mollitia facilis id dolores optio eu harum et velit ut est',
                'email' => 'giri@mailinator.com',
            'phone' => '+1 (272) 639-2588',
                'created_at' => '2023-05-05 07:54:46',
                'updated_at' => '2023-05-05 07:54:46',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Kimberly Alvarez',
                'surname' => 'Navarro',
                'address' => 'Amet maxime dolor et suscipit alias doloribus dolorem corporis in optio voluptas enim eu earum asperiores est possimus recusandae Sunt',
                'email' => 'dybuh@mailinator.com',
            'phone' => '+1 (749) 629-2168',
                'created_at' => '2023-05-05 07:54:55',
                'updated_at' => '2023-05-05 07:54:55',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Cruz Hahn',
                'surname' => 'Stevens',
                'address' => 'Sapiente error in vero esse labore voluptas exercitationem eum et',
                'email' => 'vokik@mailinator.com',
            'phone' => '+1 (536) 764-6977',
                'created_at' => '2023-05-05 07:55:02',
                'updated_at' => '2023-05-05 07:55:02',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Cadman Bauer',
                'surname' => 'Nicholson',
                'address' => 'Alias ad quibusdam ut est dolore sunt veniam',
                'email' => 'damaly@mailinator.com',
            'phone' => '+1 (396) 818-9289',
                'created_at' => '2023-05-05 07:55:09',
                'updated_at' => '2023-05-05 07:55:09',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Lucius Turner',
                'surname' => 'Stark',
                'address' => 'Eum excepturi rem beatae rerum velit aliquip ut quaerat quod aute proident quo',
                'email' => 'dobatyga@mailinator.com',
            'phone' => '+1 (401) 842-1069',
                'created_at' => '2023-05-05 07:55:22',
                'updated_at' => '2023-05-05 07:55:22',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Nash Hutchinson',
                'surname' => 'Madden',
                'address' => 'Qui ex culpa quae mollit recusandae Nisi qui asperiores autem in totam',
                'email' => 'zelifeno@mailinator.com',
            'phone' => '+1 (912) 354-9748',
                'created_at' => '2023-05-05 07:57:19',
                'updated_at' => '2023-05-05 07:57:19',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Chester Bender',
                'surname' => 'Zend',
                'address' => 'Ipsum et rerum incididunt duis minima est amet et laborum Consequatur Lorem',
                'email' => 'cofyba@mailinator.com',
            'phone' => '+1 (173) 253-6193',
                'created_at' => '2023-05-05 09:55:47',
                'updated_at' => '2023-05-07 11:19:19',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'Allen ',
                'surname' => 'Andrade',
                'address' => 'Quo consequuntur voluptatem Ut quis consectetur explicabo Neque qui tenetur vero autem in quisquam qui eos',
                'email' => 'guzas@mailinator.com',
            'phone' => '+1 (581) 123-6309',
                'created_at' => '2023-05-07 11:19:00',
                'updated_at' => '2023-05-07 11:19:00',
            ),
        ));
        
        
    }
}