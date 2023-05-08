<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $fillable = ['brand']; 
    
    function deviceModel()
    {
        return $this->hasMany(DeviceModel::class);
    }
}