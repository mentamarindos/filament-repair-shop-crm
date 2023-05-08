<?php

namespace App\Filament\Resources\ClientResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\ClientResource;
use App\Filament\Resources\ClientResource\Widgets\ClientOverview;

class ViewClient extends ViewRecord
{
    protected static string $resource = ClientResource::class;
        
}