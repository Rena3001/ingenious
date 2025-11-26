<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProcessResource\Pages;
use App\Filament\Resources\ProcessResource\RelationManagers;
use App\Models\Process;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProcessResource extends Resource
{
    protected static ?string $model = Process::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Tabs::make('Languages')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('AZ')
                            ->schema([
                                Forms\Components\TextInput::make('title_az')->label('Başlıq (AZ)'),
                                Forms\Components\Textarea::make('description_az')->label('Açıqlama (AZ)'),
                            ]),
                        Forms\Components\Tabs\Tab::make('EN')
                            ->schema([
                                Forms\Components\TextInput::make('title_en')->label('Title (EN)'),
                                Forms\Components\Textarea::make('description_en')->label('Description (EN)'),
                            ]),
                        Forms\Components\Tabs\Tab::make('RU')
                            ->schema([
                                Forms\Components\TextInput::make('title_ru')->label('Заголовок (RU)'),
                                Forms\Components\Textarea::make('description_ru')->label('Описание (RU)'),
                            ]),
                        // 🇩🇪 ALMAN DİLİ
                        Forms\Components\Tabs\Tab::make('DE')
                            ->schema([
                                Forms\Components\TextInput::make('title_de')->label('Titel (DE)'),
                                Forms\Components\Textarea::make('description_de')->label('Beschreibung (DE)'),
                            ]),

                        // 🇪🇸 İSPAN DİLİ
                        Forms\Components\Tabs\Tab::make('ES')
                            ->schema([
                                Forms\Components\TextInput::make('title_es')->label('Título (ES)'),
                                Forms\Components\Textarea::make('description_es')->label('Descripción (ES)'),
                            ]),
                    ])
                    ->columnSpanFull(),
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
                Tables\Columns\TextColumn::make('title_de')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title_es')
                    ->searchable(),

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
            'index' => Pages\ListProcesses::route('/'),
            'create' => Pages\CreateProcess::route('/create'),
            'edit' => Pages\EditProcess::route('/{record}/edit'),
        ];
    }
}
