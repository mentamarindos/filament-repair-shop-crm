<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Device;
use App\Models\DeviceModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'tickets';
    protected $fillable = [
        'client_id', 
        'device',
        'device_model',
        'description', 
        'status_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function TicketStatus()
    {
        return $this->belongsTo(TicketStatus::class);
    }

    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    public function deviceModel()
    {
        return $this->belongsTo(DeviceModel::class);
    }

}