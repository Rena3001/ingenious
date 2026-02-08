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
            TextInput::make('title_ru')->label('Заголовок (RU)'),
            TextInput::make('title_de')->label('Titel (DE)'),
            TextInput::make('title_fr')->label('Titre (FR)'),
            TextInput::make('title_es')->label('Título (ES)'),
            TextInput::make('title_zh')->label('标题 (ZH)'),

            Textarea::make('content_az')->label('Fayda mətni (AZ)')->rows(3),
            Textarea::make('content_en')->label('Benefit (EN)')->rows(3),
            Textarea::make('content_ru')->label('Преимущество (RU)')->rows(3),
            Textarea::make('content_de')->label('Vorteil (DE)')->rows(3),
            Textarea::make('content_fr')->label('Avantage (FR)')->rows(3),
            Textarea::make('content_es')->label('Beneficio (ES)')->rows(3),
            Textarea::make('content_zh')->label('优势 (ZH)')->rows(3),

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
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }
}
