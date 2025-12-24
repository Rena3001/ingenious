<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductSectionResource\Pages;
use App\Models\ProductSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProductSectionResource extends Resource
{
    protected static ?string $model = ProductSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';
    protected static ?string $navigationLabel = 'Product Section';
    protected static ?string $navigationGroup = 'Home Sections';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                /* =====================
                 * TOP SECTION
                 * ===================== */
                Forms\Components\Section::make('Top Section')
                    ->schema([
                        Forms\Components\FileUpload::make('background_image')
                            ->image()
                            ->directory('backgrounds')
                            ->label('Background Image'),

                        Forms\Components\Tabs::make('Title & Description')
                            ->tabs(self::langTabs('title', 'description')),
                    ]),

                /* =====================
                 * PRODUCTS (4)
                 * ===================== */
                Forms\Components\Section::make('Products')
                    ->schema([
                        self::productBlock(1),
                        self::productBlock(2),
                        self::productBlock(3),
                        self::productBlock(4),
                    ]),

                /* =====================
                 * BUTTON
                 * ===================== */
                Forms\Components\Section::make('Button')
                    ->schema([
                        Forms\Components\TextInput::make('button_url')
                            ->label('Button URL')
                            ->placeholder('/shop'),

                        Forms\Components\Toggle::make('is_active')
                            ->default(true),
                    ]),
            ]);
    }

    /**
     * =====================
     * TABLE
     * =====================
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('background_image')
                    ->label('BG'),

                Tables\Columns\TextColumn::make('title_en')
                    ->label('Title')
                    ->limit(30),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
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
            'index' => Pages\ListProductSections::route('/'),
            'create' => Pages\CreateProductSection::route('/create'),
            'edit' => Pages\EditProductSection::route('/{record}/edit'),
        ];
    }

    /* =====================
     * HELPERS
     * ===================== */

    protected static function langTabs(string $title, string $desc): array
    {
        $langs = ['az','en','ru','de','fr','es','zh'];
        $tabs = [];

        foreach ($langs as $lang) {
            $tabs[] = Forms\Components\Tabs\Tab::make(strtoupper($lang))
                ->schema([
                    Forms\Components\TextInput::make("{$title}_{$lang}")
                        ->label("Title ({$lang})"),

                    Forms\Components\Textarea::make("{$desc}_{$lang}")
                        ->label("Description ({$lang})")
                        ->rows(3),
                ]);
        }

        return $tabs;
    }

    protected static function productBlock(int $i): Forms\Components\Section
    {
        return Forms\Components\Section::make("Product {$i}")
            ->schema([
                Forms\Components\FileUpload::make("product_{$i}_image")
                    ->image()
                    ->directory('products')
                    ->label("Product {$i} Image"),

                Forms\Components\Tabs::make("Product {$i} Texts")
                    ->tabs(self::langTabs("product_{$i}_title", "product_{$i}_desc")),
            ])
            ->collapsible();
    }
}
