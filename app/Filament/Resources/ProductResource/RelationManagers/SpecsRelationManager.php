<?php

namespace App\Filament\Resources\ProductResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SpecsRelationManager extends RelationManager
{
    protected static string $relationship = 'specs';

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('key')->required(),
            Forms\Components\TextInput::make('value')->required(),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('key'),
            Tables\Columns\TextColumn::make('value'),
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

