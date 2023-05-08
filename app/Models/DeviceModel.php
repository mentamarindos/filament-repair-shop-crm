<?php

namespace App\Models;

use App\Models\Device;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DeviceModel extends Model
{
    use HasFactory;
    protected $fillable = ['device_id', 'model_name'];

    function device()
    {
        return $this->hasOne(Device::class);
    }

}