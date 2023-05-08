<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Device;
use App\Models\DeviceModel;
use App\Models\TicketStatus;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    
    protected $table = 'tickets';
    protected $fillable = [
        'client_id', 
        'device_id',
        'device_model_id',
        'description',
        'images',
        'status_id',
        'severity'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function TicketStatus()
    {
        return $this->belongsTo(TicketStatus::class, 'ticket_status_id', 'id');
    }

    // public function TicketStatus()
    // {
    //     return $this->belongsTo(TicketStatus::class);
    // }

    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    public function deviceModel()
    {
        return $this->belongsTo(DeviceModel::class);
    }

}