<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductHighlightResource\Pages;
use App\Filament\Resources\ProductHighlightResource\RelationManagers\ProductHighlightFeaturesRelationManager;
use App\Models\ProductHighlight;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;

class ProductHighlightResource extends Resource
{
    protected static ?string $model = ProductHighlight::class;

    protected static ?string $navigationIcon = 'heroicon-o-lock-closed';
    protected static ?string $navigationGroup = 'Security Overview';
    protected static ?string $navigationLabel = 'Product Highlight';

    public static function form(Form $form): Form
    {
        return $form->schema([

            Select::make('product_id')
                ->relationship('product', 'name_az')
                ->required()
                ->searchable()
                ->preload()
                ->label('Məhsul'),


            Toggle::make('is_active')
                ->default(true)
                ->label('Aktiv'),

            Tabs::make('Content')->tabs([

                // 12 — Məhsulun adı
                Tabs\Tab::make('Başlıq')->schema([
                    TextInput::make('title_az')->label('AZ'),
                    TextInput::make('title_en')->label('EN'),
                    TextInput::make('title_ru')->label('RU'),
                    TextInput::make('title_de')->label('DE'),
                    TextInput::make('title_fr')->label('FR'),
                    TextInput::make('title_es')->label('ES'),
                    TextInput::make('title_zh')->label('ZH'),
                ]),

                // 12.1 — Qısa izah
                Tabs\Tab::make('Açıqlama')->schema([
                    Textarea::make('description_az')->label('AZ'),
                    Textarea::make('description_en')->label('EN'),
                    Textarea::make('description_ru')->label('RU'),
                    Textarea::make('description_de')->label('DE'),
                    Textarea::make('description_fr')->label('FR'),
                    Textarea::make('description_es')->label('ES'),
                    Textarea::make('description_zh')->label('ZH'),
                ]),

                // Media & CTA
                Tabs\Tab::make('Media & CTA')->schema([
                    FileUpload::make('background_image')
                        ->directory('product-highlights/backgrounds')
                        ->image()
                        ->required()
                        ->label('Arxa fon (qapı üzərində foto)'),

                    TextInput::make('cta_text_key')
                        ->default('view_product')
                        ->label('CTA translation key'),
                ]),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product.title')->label('Məhsul'),
                Tables\Columns\IconColumn::make('is_active')->boolean(),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            ProductHighlightFeaturesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListProductHighlights::route('/'),
            'create' => Pages\CreateProductHighlight::route('/create'),
            'edit'   => Pages\EditProductHighlight::route('/{record}/edit'),
        ];
    }
}
