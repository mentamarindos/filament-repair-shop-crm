<?php

namespace App\Filament\Resources\ClientResource\Pages;

use App\Filament\Resources\ClientResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClient extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = ClientResource::class;
    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
