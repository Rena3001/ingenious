<?php

namespace App\Filament\Resources\InstallationSectionResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class StepsRelationManager extends RelationManager
{
    protected static string $relationship = 'steps';

    protected static ?string $title = 'Installation Steps';

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('step_number')->numeric()->required(),
                Forms\Components\TextInput::make('icon')->placeholder('flaticon-video'),

                Forms\Components\TextInput::make('sort_order')->numeric()->default(1),
                Forms\Components\Toggle::make('is_active')->default(true),

                Forms\Components\Tabs::make()
                    ->tabs([

                        Forms\Components\Tabs\Tab::make('Title')
                            ->schema([
                                Forms\Components\TextInput::make('title_az')->required(),
                                Forms\Components\TextInput::make('title_en'),
                                Forms\Components\TextInput::make('title_ru'),
                                Forms\Components\TextInput::make('title_de'),
                                Forms\Components\TextInput::make('title_es'),
                                Forms\Components\TextInput::make('title_fr'),
                                Forms\Components\TextInput::make('title_zh'),
                            ]),

                        Forms\Components\Tabs\Tab::make('Description')
                            ->schema([
                                Forms\Components\Textarea::make('description_az'),
                                Forms\Components\Textarea::make('description_en'),
                                Forms\Components\Textarea::make('description_ru'),
                                Forms\Components\Textarea::make('description_de'),
                                Forms\Components\Textarea::make('description_es'),
                                Forms\Components\Textarea::make('description_fr'),
                                Forms\Components\Textarea::make('description_zh'),
                            ]),
                    ]),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->reorderable('sort_order')
            ->columns([
                Tables\Columns\TextColumn::make('step_number')->label('Step'),
                Tables\Columns\TextColumn::make('title_az')->label('Title'),
                Tables\Columns\TextColumn::make('icon'),
                Tables\Columns\ToggleColumn::make('is_active'),
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
