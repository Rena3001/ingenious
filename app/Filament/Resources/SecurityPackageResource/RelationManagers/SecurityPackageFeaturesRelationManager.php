<?php

namespace App\Filament\Resources\SecurityPackageResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Forms\Components\TextInput;

class SecurityPackageFeaturesRelationManager extends RelationManager
{
    protected static string $relationship = 'features';

    protected static ?string $title = 'Texniki göstəricilər';

    public function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            TextInput::make('text_az')->label('AZ')->required(),
            TextInput::make('text_en')->label('EN'),
            TextInput::make('text_ru')->label('RU'),
            TextInput::make('text_de')->label('DE'),
            TextInput::make('text_fr')->label('FR'),
            TextInput::make('text_es')->label('ES'),
            TextInput::make('text_zh')->label('ZH'),
            TextInput::make('order')->numeric()->default(0),
        ]);
    }

    public function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('text_az')->label('AZ'),
                Tables\Columns\TextColumn::make('order')->sortable(),
            ])
            ->defaultSort('order')
            ->reorderable('order')

            // ✅ CREATE DÜYMƏSİ BURADA
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])

            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }
}
