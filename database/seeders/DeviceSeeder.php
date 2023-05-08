<?php

namespace Database\Seeders;

use App\Models\Device;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            'Samsung',
            'Apple',
            'Huawei',
            'Xiaomi',
            'Oppo',
            'Vivo',
            'OnePlus',
            'LG',
            'Sony',
            'Nokia',
        ];

        foreach ($brands as $brand) {
            Device::create(['brand' => $brand]);
        }
    }
}
