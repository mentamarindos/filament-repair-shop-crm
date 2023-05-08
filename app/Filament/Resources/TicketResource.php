<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TicketResource\Pages;
use App\Filament\Resources\TicketResource\RelationManagers;
use App\Models\Ticket;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TicketResource extends Resource
{
    protected static ?string $model = Ticket::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Gestiones';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('client_id')
                    ->required()
                    ->relationship('client', 'name'),
                Forms\Components\Select::make('ticket_status_id')
                    ->required()
                    ->relationship('TicketStatus', 'name'),
                Forms\Components\Select::make('device_id')
                    ->required()
                    ->relationship('Device', 'brand'),
                Forms\Components\Select::make('device_model_id')
                    ->required()
                    ->relationship('DeviceModel', 'model_name'),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('severity')
                    ->required()
                    ->maxLength(255),
                // Forms\Components\FileUpload::make('images')
                //     ->image()
                //     ->disk('local'),
                Forms\Components\FileUpload::make('images'),

                Forms\Components\DateTimePicker::make('closed_at'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('client.name'),
                Tables\Columns\TextColumn::make('ticketStatus.name'),
                Tables\Columns\TextColumn::make('device.brand'),
                Tables\Columns\TextColumn::make('deviceModel.model_name'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('severity'),
                Tables\Columns\ImageColumn::make('images'),
                Tables\Columns\TextColumn::make('closed_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->slideOver(),
                // Tables\Actions\ViewAction::make()->modalActions(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTickets::route('/'),
            'create' => Pages\CreateTicket::route('/create'),
            'edit' => Pages\EditTicket::route('/{record}/edit'),
            'view' => Pages\ViewTicket::route('/{record}'),
        ];
    }    

    public static function getLabel(): ?string
    {
        return trans('Parte');
    }

    protected static function getNavigationLabel(): string
    {
        return trans('List of tickets');
    }

}