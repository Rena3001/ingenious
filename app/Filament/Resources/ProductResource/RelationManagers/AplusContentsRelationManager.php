<?php

namespace App\Filament\Resources\ProductResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AplusContentsRelationManager extends RelationManager
{
    protected static string $relationship = 'aplusContents';

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\FileUpload::make('image')
                ->image()
                ->directory('products/aplus')
                ->required(),

            Forms\Components\Textarea::make('text_en')->label('Text (EN)'),
            Forms\Components\Textarea::make('text_az')->label('Text (AZ)'),

            Forms\Components\TextInput::make('sort_order')
                ->numeric()
                ->default(0),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('image'),
            Tables\Columns\TextColumn::make('sort_order'),
        ])->defaultSort('sort_order')
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
