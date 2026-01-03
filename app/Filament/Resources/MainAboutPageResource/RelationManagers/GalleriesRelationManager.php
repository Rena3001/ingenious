<?php

namespace App\Filament\Resources\MainAboutPageResource\RelationManagers;

use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Actions\EditAction;

class GalleryRelationManager extends RelationManager
{
    protected static string $relationship = 'galleries';
    protected static ?string $title = 'Gallery Images';




    public function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\FileUpload::make('image')
                ->image()
                ->directory('about/gallery')
                ->required(),

            Forms\Components\TextInput::make('sort_order')
                ->numeric()
                ->default(0),
        ]);
    }

    public function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->label('Image'),
                Tables\Columns\TextColumn::make('sort_order'),
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->defaultSort('sort_order');
    }
    protected function canCreate(): bool
    {
        return true;
    }
    protected function canEdit($record): bool
    {
        return true;
    }

    protected function canDelete($record): bool
    {
        return true;
    }
}
