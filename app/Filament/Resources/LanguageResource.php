<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LanguageResource\Pages;
use App\Filament\Resources\LanguageResource\RelationManagers;
use App\Models\Language;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;



class LanguageResource extends Resource
{
    protected static ?string $model = Language::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

  

public static function form(Forms\Form $form): Forms\Form
{
    return $form->schema([
        Forms\Components\TextInput::make('code')
            ->required()
            ->maxLength(5),

        Forms\Components\TextInput::make('label')
            ->required()
            ->maxLength(10),

        Forms\Components\TextInput::make('name')
            ->required(),

        Forms\Components\FileUpload::make('flag')
            ->directory('flags')
            ->image(),

        Forms\Components\Toggle::make('is_active')
            ->default(true),

        Forms\Components\TextInput::make('order')
            ->numeric()
            ->default(0),
    ]);
}


public static function table(Tables\Table $table): Tables\Table
{
    return $table->columns([
        Tables\Columns\TextColumn::make('code'),
        Tables\Columns\TextColumn::make('label'),
        Tables\Columns\TextColumn::make('name'),
        Tables\Columns\IconColumn::make('is_active')->boolean(),
        Tables\Columns\TextColumn::make('order'),
    ])->defaultSort('order');
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
            'index' => Pages\ListLanguages::route('/'),
            'create' => Pages\CreateLanguage::route('/create'),
            'edit' => Pages\EditLanguage::route('/{record}/edit'),
        ];
    }
}
