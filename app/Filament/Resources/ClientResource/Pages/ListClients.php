<?php

namespace App\Filament\Resources\ClientResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\ClientResource;
use App\Filament\Resources\ClientResource\Widgets\ClientOverview;

class ListClients extends ListRecords
{
    protected static string $resource = ClientResource::class;
    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getFooterWidgets(): array
    {
        return [
            ClientOverview::class
        ];
    }
  
}