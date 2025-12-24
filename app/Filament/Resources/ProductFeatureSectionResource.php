<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductFeatureSectionResource\Pages;
use App\Models\ProductFeatureSection;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;

class ProductFeatureSectionResource extends Resource
{
    protected static ?string $model = ProductFeatureSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-shield-check';
    protected static ?string $navigationLabel = 'Product Features Section';
    protected static ?string $navigationGroup = 'Site Sections';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([

            /* ================= IMAGE ================= */
            Forms\Components\Section::make('Images')
                ->schema([
                    Forms\Components\FileUpload::make('background_image')
                        ->label('Background Image')
                        ->directory('product-features')
                        ->image(),

                    Forms\Components\FileUpload::make('image')
                        ->label('Main Image')
                        ->directory('product-features')
                        ->image()
                        ->required(),
                ])->columns(2),

            /* ================= TITLES ================= */
            Forms\Components\Section::make('Titles')
                ->schema([
                    Forms\Components\Tabs::make('Title Translations')->tabs([
                        self::langTab('az'),
                        self::langTab('en'),
                        self::langTab('ru'),
                        self::langTab('de'),
                        self::langTab('fr'),
                        self::langTab('es'),
                        self::langTab('zh'),
                    ]),
                ]),

            /* ================= FEATURES ================= */
            Forms\Components\Section::make('Features (3 items)')
                ->schema([
                    self::featureBlock(1),
                    self::featureBlock(2),
                    self::featureBlock(3),
                ]),

            Forms\Components\Toggle::make('is_active')
                ->label('Active')
                ->default(true),
        ]);
    }

    /* ================= LANGUAGE TAB ================= */
    protected static function langTab(string $locale)
    {
        return Forms\Components\Tabs\Tab::make(strtoupper($locale))
            ->schema([
                Forms\Components\TextInput::make("title_$locale")
                    ->label('Section Title')
                    ->required(),

                Forms\Components\Textarea::make("icon_1_desc_$locale")
                    ->label('Feature 1 Description'),

                Forms\Components\Textarea::make("icon_2_desc_$locale")
                    ->label('Feature 2 Description'),

                Forms\Components\Textarea::make("icon_3_desc_$locale")
                    ->label('Feature 3 Description'),
            ]);
    }

    /* ================= FEATURE BLOCK ================= */
    protected static function featureBlock(int $index)
    {
        return Forms\Components\Fieldset::make("Feature $index")
            ->schema([
                Forms\Components\TextInput::make("icon_$index")
                    ->label("Icon Class (flaticon-*)")
                    ->required(),

                Forms\Components\TextInput::make("icon_{$index}_title_az")
                    ->label("Title AZ")
                    ->required(),

                Forms\Components\TextInput::make("icon_{$index}_title_en")
                    ->label("Title EN")
                    ->required(),

                Forms\Components\TextInput::make("icon_{$index}_title_ru")
                    ->label("Title RU"),
            ])->columns(3);
    }

    /* ================= TABLE ================= */
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->label('Image'),
                Tables\Columns\TextColumn::make('title_en')->label('Title'),
                Tables\Columns\IconColumn::make('is_active')->boolean(),
            ])
            ->defaultSort('id', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProductFeatureSections::route('/'),
            'create' => Pages\CreateProductFeatureSection::route('/create'),
            'edit' => Pages\EditProductFeatureSection::route('/{record}/edit'),
        ];
    }
}
