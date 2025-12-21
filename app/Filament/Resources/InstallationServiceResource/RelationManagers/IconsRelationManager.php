<?php

namespace App\Filament\Resources\InstallationServiceResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Forms\Components\TextInput;

class IconsRelationManager extends RelationManager
{
    protected static string $relationship = 'icons';
    protected static ?string $title = 'Service Icons (20.3)';

    public function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            TextInput::make('icon')
                ->label('Flaticon class')
                ->placeholder('flaticon-shield'),

            TextInput::make('title_az')->label('AZ'),
            TextInput::make('title_en')->label('EN'),
            TextInput::make('title_ru')->label('RU'),
            TextInput::make('title_de')->label('DE'),
            TextInput::make('title_fr')->label('FR'),
            TextInput::make('title_es')->label('ES'),
            TextInput::make('title_zh')->label('ZH'),

            TextInput::make('order')->numeric()->default(0),
        ]);
    }

    public function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('icon'),
                Tables\Columns\TextColumn::make('title_az')->label('AZ'),
                Tables\Columns\TextColumn::make('order')->sortable(),
            ])
            ->reorderable('order')
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }
}
