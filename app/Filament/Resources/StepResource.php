<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StepResource\Pages;
use App\Filament\Resources\StepResource\RelationManagers;
use App\Models\Step;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StepResource extends Resource
{
    protected static ?string $model = Step::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Tabs::make('Languages')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('AZ')->schema([
                            Forms\Components\TextInput::make('title_az'),
                            Forms\Components\Textarea::make('description_az'),
                            Forms\Components\TextInput::make('button_text_az'),
                        ]),
                        Forms\Components\Tabs\Tab::make('EN')->schema([
                            Forms\Components\TextInput::make('title_en'),
                            Forms\Components\Textarea::make('description_en'),
                            Forms\Components\TextInput::make('button_text_en'),
                        ]),
                        Forms\Components\Tabs\Tab::make('RU')->schema([
                            Forms\Components\TextInput::make('title_ru'),
                            Forms\Components\Textarea::make('description_ru'),
                            Forms\Components\TextInput::make('button_text_ru'),
                        ]),
                    ])
                    ->columnSpanFull(),

                Forms\Components\FileUpload::make('image')
                    ->label('Step Image')
                    ->image()
                    ->directory('steps'),

                Forms\Components\Select::make('layout')
                    ->label('Layout')
                    ->options([
                        'left-image' => 'Image Left / Text Right',
                        'right-image' => 'Image Right / Text Left',
                    ])
                    ->required(),

                Forms\Components\TextInput::make('button_link')->label('Button Link'),

                Forms\Components\TextInput::make('step_number')
                    ->numeric()
                    ->label('Step Number')
                    ->default(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_az')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title_en')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title_ru')
                    ->searchable(),
                Tables\Columns\TextColumn::make('button_text_az')
                    ->searchable(),
                Tables\Columns\TextColumn::make('button_text_en')
                    ->searchable(),
                Tables\Columns\TextColumn::make('button_text_ru')
                    ->searchable(),
                Tables\Columns\TextColumn::make('button_link')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('layout'),
                Tables\Columns\TextColumn::make('step_number')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListSteps::route('/'),
            'create' => Pages\CreateStep::route('/create'),
            'edit' => Pages\EditStep::route('/{record}/edit'),
        ];
    }
}
