<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('ticket_statuses')->delete();

        $statuses = [
            ['name' => 'Pending'],
            ['name' => 'Received'],
            ['name' => 'In Repair'],
            ['name' => 'Completed'],
        ];

        // Insertar los valores en la tabla
        foreach ($statuses as $status) {
            \DB::table('ticket_statuses')->insert($status);
        }
    }
}
