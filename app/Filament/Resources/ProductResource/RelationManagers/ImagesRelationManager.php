<?php

namespace App\Filament\Resources\ProductResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ImagesRelationManager extends RelationManager
{
    protected static string $relationship = 'images';

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\FileUpload::make('path')
                ->label('Şəkil')
                ->image()
                ->directory('products/gallery')
                ->required(),

            Forms\Components\TextInput::make('sort_order')
                ->numeric()
                ->default(0),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('path'),
            Tables\Columns\TextColumn::make('sort_order'),
        ])->defaultSort('sort_order')
        ->headerActions([
                Tables\Actions\CreateAction::make(), // ⬅️ ADD DÜYMƏSİ BURADAN GƏLİR
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }
}
