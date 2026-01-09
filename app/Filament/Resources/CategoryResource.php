<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Kateqoriyalar';
    protected static ?string $modelLabel = 'Kateqoriya';
    protected static ?string $pluralModelLabel = 'Kateqoriyalar';

    public static function form(Form $form): Form
    {
        return $form->schema([

            Forms\Components\Tabs::make('LangTabs')->tabs([

                // AZ TAB
                Forms\Components\Tabs\Tab::make('AZ')->schema([
                    Forms\Components\TextInput::make('name_az')
                        ->label('Kateqoriya adı (AZ)')
                        ->required(),
                ]),

                // EN TAB
                Forms\Components\Tabs\Tab::make('EN')->schema([
                    Forms\Components\TextInput::make('name_en')
                        ->label('Category name (EN)'),
                ]),

                // RU TAB
                Forms\Components\Tabs\Tab::make('RU')->schema([
                    Forms\Components\TextInput::make('name_ru')
                        ->label('Название категории (RU)'),
                ]),
                Forms\Components\Tabs\Tab::make('DE')->schema([
                    Forms\Components\TextInput::make('name_de')
                        ->label('Kategorie (DE)'),
                ]),

                // 🇪🇸 ES TAB
                Forms\Components\Tabs\Tab::make('ES')->schema([
                    Forms\Components\TextInput::make('name_es')
                        ->label('Categoría (ES)'),
                ]),
                Forms\Components\Tabs\Tab::make('FR')->schema([
                    Forms\Components\TextInput::make('name_fr')
                        ->label('Catégorie (FR)'),
                ]),

                Forms\Components\Tabs\Tab::make('ZH')->schema([
                    Forms\Components\TextInput::make('name_zh')
                        ->label('分类 (ZH)'),
                ]),


            ])->columnSpanFull(),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([

            Tables\Columns\TextColumn::make('id')
                ->label('ID'),

            Tables\Columns\TextColumn::make('name_az')
                ->label('Ad (AZ)')
                ->searchable(),

            Tables\Columns\TextColumn::make('created_at')
                ->label('Tarix')
                ->dateTime('d.m.Y'),
        ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit'   => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
