<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';
    protected static ?string $navigationLabel = 'Məhsullar';
    protected static ?string $modelLabel = 'Məhsul';
    protected static ?string $pluralModelLabel = 'Məhsullar';

    public static function form(Form $form): Form
    {
        return $form->schema([

            Forms\Components\Select::make('category_id')
                ->relationship('category', 'name_az')
                ->label('Kateqoriya')
                ->required(),

            Forms\Components\Tabs::make('LangTabs')->tabs([
                Forms\Components\Tabs\Tab::make('AZ')->schema([
                    Forms\Components\TextInput::make('name_az')
                        ->label('Ad (AZ)')
                        ->required(),

                    Forms\Components\Textarea::make('description_az')
                        ->label('Təsvir (AZ)')
                        ->rows(3),
                ]),

                Forms\Components\Tabs\Tab::make('EN')->schema([
                    Forms\Components\TextInput::make('name_en')
                        ->label('Name (EN)'),

                    Forms\Components\Textarea::make('description_en')
                        ->label('Description (EN)')
                        ->rows(3),
                ]),

                Forms\Components\Tabs\Tab::make('RU')->schema([
                    Forms\Components\TextInput::make('name_ru')
                        ->label('Название (RU)'),

                    Forms\Components\Textarea::make('description_ru')
                        ->label('Описание (RU)')
                        ->rows(3),
                ]),
                // 🇩🇪 DE TAB
                Forms\Components\Tabs\Tab::make('DE')->schema([
                    Forms\Components\TextInput::make('name_de')
                        ->label('Name (DE)'),

                    Forms\Components\Textarea::make('description_de')
                        ->label('Beschreibung (DE)')
                        ->rows(3),
                ]),

                // 🇪🇸 ES TAB
                Forms\Components\Tabs\Tab::make('ES')->schema([
                    Forms\Components\TextInput::make('name_es')
                        ->label('Nombre (ES)'),

                    Forms\Components\Textarea::make('description_es')
                        ->label('Descripción (ES)')
                        ->rows(3),
                ]),
            ])->columnSpanFull(),

            Forms\Components\TextInput::make('price')
                ->label('Qiymət ($)')
                ->numeric()
                ->required(),

            Forms\Components\FileUpload::make('image')
                ->label('Şəkil')
                ->image()
                ->directory('products'),

            Forms\Components\TextInput::make('amazon_link')
                ->label('Amazon Link')
                ->url(),
        ]);
    }


    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('image')->label('Şəkil'),

            Tables\Columns\TextColumn::make('name_az')
                ->label('Ad (AZ)')
                ->searchable(),

            Tables\Columns\TextColumn::make('category.name')
                ->label('Kateqoriya'),

            Tables\Columns\TextColumn::make('price')
                ->label('Qiymət'),

            Tables\Columns\TextColumn::make('amazon_link')
                ->label('Amazon link')
                ->url(fn($record) => $record->amazon_link)
                ->openUrlInNewTab()
                ->toggleable(),
        ]);
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
