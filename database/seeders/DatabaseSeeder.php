<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call(UsersTableSeeder::class);
        // $this->call(ClientsTableSeeder::class);
        // $this->call(CompaniesTableSeeder::class);
        // $this->call(BranchesTableSeeder::class);
        // $this->call(TicketStatusSeeder::class);
        // $this->call(DeviceSeeder::class);
        $this->call(DeviceModelSeeder::class);
    }
}