<?php

namespace App\Filament\Resources\ClientResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class ClientOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total', $usersCount=9)
            ->color('primary')
            ->description('Total users'),

            Card::make('Admin', $usersCount2=13)
                ->color('danger')
                ->description('Admin users'),

            Card::make('Active', $usersCountac=99)
                ->color('success')
                ->description('Active users'),
        ];
    }
}
