<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientResource\Pages;
use App\Models\Client;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;
    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';
    protected static ?string $navigationLabel = 'Müştərilər';
    protected static ?string $pluralLabel = 'Müştəri loqoları';
    protected static ?string $navigationGroup = 'Sayt idarəetməsi';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Textarea::make('image')
                ->label('İkon (SVG və ya class)')
                ->rows(3),

            Forms\Components\TextInput::make('url')
                ->label('URL')
                ->placeholder('https://example.com'),

            Forms\Components\TextInput::make('sort')
                ->numeric()
                ->default(0)
                ->label('Sıralama'),

            Forms\Components\Toggle::make('is_active')
                ->label('Aktiv')
                ->default(true),
        ])
        ->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('image')
                ->label('İkon (SVG və ya class)')
                ->width(80),

            Tables\Columns\TextColumn::make('url')
                ->label('Link'),

            Tables\Columns\TextColumn::make('sort')
                ->label('Sıra')
                ->sortable(),

            Tables\Columns\BooleanColumn::make('is_active')
                ->label('Açıq'),
        ])
        ->defaultSort('sort', 'asc')
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
        ];
    }
}
