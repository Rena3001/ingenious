<?php

namespace App\Filament\Resources\ProductHighlightResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class ProductHighlightFeaturesRelationManager extends RelationManager
{
    protected static string $relationship = 'features';
    protected static ?string $title = 'Xüsusiyyətlər';

    public function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            TextInput::make('icon')
                ->label('Flaticon class')
                ->placeholder('flaticon-fingerprint')
                ->required(),

            TextInput::make('title_az')->label('Başlıq (AZ)')->required(),
            TextInput::make('title_en')->label('Title (EN)'),

            Textarea::make('content_az')->label('Fayda mətni (AZ)')->rows(3),
            Textarea::make('content_en')->label('Benefit (EN)')->rows(3),

            TextInput::make('order')->numeric()->default(0),
        ]);
    }

    public function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_az')->label('Başlıq'),
                Tables\Columns\TextColumn::make('icon')->label('Icon'),
                Tables\Columns\TextColumn::make('order')->sortable(),
            ])
            ->defaultSort('order')
            ->reorderable('order')
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }
}
