<?php

namespace App\Filament\Resources\InstallationServiceResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Tabs;

class IconsRelationManager extends RelationManager
{
    protected static string $relationship = 'icons';

    protected static ?string $title = 'Service Icons';

    public function form(Form $form): Form
    {
        return $form->schema([ 

            TextInput::make('icon')
                ->label('Icon class')
                ->placeholder('flaticon-shield / fa fa-lock')
                ->required(),

            TextInput::make('order')
                ->numeric()
                ->default(0)
                ->label('Order'),

            Tabs::make('Titles')->tabs([

                Tabs\Tab::make('AZ')->schema([
                    TextInput::make('title_az')->label('Title AZ'),
                ]),

                Tabs\Tab::make('EN')->schema([
                    TextInput::make('title_en')->label('Title EN'),
                ]),

                Tabs\Tab::make('RU')->schema([
                    TextInput::make('title_ru')->label('Title RU'),
                ]),

                Tabs\Tab::make('DE')->schema([
                    TextInput::make('title_de')->label('Title DE'),
                ]),

                Tabs\Tab::make('FR')->schema([
                    TextInput::make('title_fr')->label('Title FR'),
                ]),

                Tabs\Tab::make('ES')->schema([
                    TextInput::make('title_es')->label('Title ES'),
                ]),

                Tabs\Tab::make('ZH')->schema([
                    TextInput::make('title_zh')->label('Title ZH'),
                ]),
            ]),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->reorderable('order') // 🔥 drag & drop
            ->defaultSort('order')
            ->columns([

                Tables\Columns\TextColumn::make('icon')
                    ->label('Icon')
                    ->searchable(),

                Tables\Columns\TextColumn::make('title_az')
                    ->label('Title (AZ)')
                    ->limit(30),

                Tables\Columns\TextColumn::make('order')
                    ->sortable(),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }
}
