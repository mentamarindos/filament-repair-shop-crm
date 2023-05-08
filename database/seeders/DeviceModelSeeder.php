<?php

namespace Database\Seeders;

use App\Models\Device;
use App\Models\DeviceModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DeviceModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $devices = Device::all();

        $models = [
            'Samsung' => ['Galaxy S21', 'Galaxy Note 20', 'Galaxy A52'],
            'Apple' => ['iPhone 12', 'iPhone 11', 'iPhone SE'],
            'Huawei' => ['P40 Pro', 'P30 Pro', 'Mate 40'],
            'Xiaomi' => ['Mi 11', 'Redmi Note 10', 'Poco X3'],
            'Oppo' => ['Find X3 Pro', 'Reno 5 Pro', 'A93'],
            'Vivo' => ['X60 Pro', 'V21', 'Y51'],
            'OnePlus' => ['OnePlus 9', 'OnePlus 8 Pro', 'OnePlus Nord'],
            'LG' => ['G8X ThinQ', 'V60 ThinQ', 'Velvet'],
            'Sony' => ['Xperia 1 II', 'Xperia 5 II', 'Xperia 10 II'],
            'Nokia' => ['Nokia 8.3', 'Nokia 5.4', 'Nokia 3.4'],
        ];

        foreach ($devices as $device) {
            if (isset($models[$device->brand])) {
                foreach ($models[$device->brand] as $model_name) {
                    DeviceModel::create([
                        'device_id' => $device->id,
                        'model_name' => $model_name,
                    ]);
                }
            }
        }
    }
}
