<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShopSectionResource\Pages;
use App\Models\ShopSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;

class ShopSectionResource extends Resource
{
    protected static ?string $model = ShopSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';
    protected static ?string $navigationGroup = 'Technical Services';
    protected static ?string $navigationLabel = 'Shop Section';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Shop Section Content')
                    ->tabs([

                        // =========================
                        // AZ
                        // =========================
                        Tab::make('AZ')
                            ->schema([
                                Forms\Components\TextInput::make('title_az')
                                    ->label('Başlıq (AZ)')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\Textarea::make('description_az')
                                    ->label('Açıqlama (AZ)')
                                    ->rows(4),
                            ]),

                        // =========================
                        // EN
                        // =========================
                        Tab::make('EN')
                            ->schema([
                                Forms\Components\TextInput::make('title_en')
                                    ->label('Title (EN)')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\Textarea::make('description_en')
                                    ->label('Description (EN)')
                                    ->rows(4),
                            ]),

                        // =========================
                        // RU
                        // =========================
                        Tab::make('RU')
                            ->schema([
                                Forms\Components\TextInput::make('title_ru')
                                    ->label('Заголовок (RU)')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\Textarea::make('description_ru')
                                    ->label('Описание (RU)')
                                    ->rows(4),
                            ]),

                        // =========================
                        // DE
                        // =========================
                        Tab::make('DE')
                            ->schema([
                                Forms\Components\TextInput::make('title_de')
                                    ->label('Titel (DE)')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\Textarea::make('description_de')
                                    ->label('Beschreibung (DE)')
                                    ->rows(4),
                            ]),

                        // =========================
                        // ES
                        // =========================
                        Tab::make('ES')
                            ->schema([
                                Forms\Components\TextInput::make('title_es')
                                    ->label('Título (ES)')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\Textarea::make('description_es')
                                    ->label('Descripción (ES)')
                                    ->rows(4),
                            ]),

                        // =========================
                        // FR
                        // =========================
                        Tab::make('FR')
                            ->schema([
                                Forms\Components\TextInput::make('title_fr')
                                    ->label('Titre (FR)')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\Textarea::make('description_fr')
                                    ->label('Description (FR)')
                                    ->rows(4),
                            ]),

                        // =========================
                        // ZH
                        // =========================
                        Tab::make('ZH')
                            ->schema([
                                Forms\Components\TextInput::make('title_zh')
                                    ->label('标题 (ZH)')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\Textarea::make('description_zh')
                                    ->label('描述 (ZH)')
                                    ->rows(4),
                            ]),

                        // =========================
                        // SETTINGS
                        // =========================
                        Tab::make('Settings')
                            ->schema([
                                Forms\Components\Toggle::make('is_active')
                                    ->label('Aktivdir')
                                    ->default(true),
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
                    ->label('Başlıq (AZ)')
                    ->searchable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Status')
                    ->boolean(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Yenilənmə')
                    ->dateTime('d.m.Y H:i'),
            ])
            ->defaultSort('id', 'desc')
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListShopSections::route('/'),
            'create' => Pages\CreateShopSection::route('/create'),
            'edit' => Pages\EditShopSection::route('/{record}/edit'),
        ];
    }
}
