<?php

namespace App\Filament\Resources\ProductResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VideosRelationManager extends RelationManager
{
    protected static string $relationship = 'videos';

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('type')
                ->options([
                    'intro' => 'Intro Video',
                    'installation' => 'Installation Video',
                ])
                ->required(),

            Forms\Components\TextInput::make('video_url')
                ->url()
                ->required(),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('type'),
            Tables\Columns\TextColumn::make('video_url')->limit(30),
        ])
        ->headerActions([
                Tables\Actions\CreateAction::make(), // ⬅️ ADD DÜYMƏSİ BURADAN GƏLİR
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->reorderable('sort_order');
    }
}

