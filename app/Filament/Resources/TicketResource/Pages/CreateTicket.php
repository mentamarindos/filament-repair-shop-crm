<?php

namespace App\Filament\Resources\TicketResource\Pages;

use App\Filament\Resources\TicketResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;
use Filament\Forms;

class CreateTicket extends CreateRecord
{
    use HasWizard;
    protected static string $resource = TicketResource::class;

    protected function getSteps(): array
    {
        return [
            Forms\Components\Wizard\Step::make('Cliente')
                ->description('Datos del cliente')
                ->schema([
                    Forms\Components\Select::make('client_id')
                    ->required()
                    ->relationship('client', 'name'),
                ]),
            Forms\Components\Wizard\Step::make('Dispositivo')
                ->description('Datos del dispositivo')
                ->schema([
                    Forms\Components\TextInput::make('device')
                    ->required()
                    ->maxLength(255),
                ]),
            Forms\Components\Wizard\Step::make('Datos del problema')
                ->description('Información sobre la reparación')
                ->schema([
                    Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('severity')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('images')
                    ->required()
                ]),        
            ];
    }
    
}