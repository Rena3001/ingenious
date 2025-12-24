<?php

namespace App\Filament\Resources;

use App\Models\Subscriber;
use Filament\Tables;
use Filament\Resources\Resource;
use App\Filament\Resources\SubscriberResource\Pages;

class SubscriberResource extends Resource
{
    protected static ?string $model = Subscriber::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static ?string $navigationLabel = 'Subscribers';
    protected static ?string $navigationGroup = 'Marketing';

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Subscribed At')
                    ->dateTime(),
            ])
            ->actions([])
            ->bulkActions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSubscribers::route('/'),
        ];
    }
}
