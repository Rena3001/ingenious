<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Str;

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

            /* =====================
               BASIC INFO
            ===================== */
            Forms\Components\Select::make('category_id')
                ->relationship('category', 'name_az')
                ->label('Kateqoriya')
                ->required(),

            Forms\Components\TextInput::make('model_code')
                ->label('Model kodu')
                ->required()
                ->unique(ignoreRecord: true),

            Forms\Components\TextInput::make('slug')
                ->label('Slug')
                ->required()
                ->unique(ignoreRecord: true)
                ->reactive()
                ->afterStateUpdated(
                    fn($state, callable $set) =>
                    $set('slug', Str::slug($state))
                ),

            /* =====================
               LANG TABS (7 LANG)
            ===================== */
            Forms\Components\Tabs::make('LangTabs')->tabs([

                self::langTab('AZ', 'az'),
                self::langTab('EN', 'en'),
                self::langTab('RU', 'ru'),
                self::langTab('DE', 'de'),
                self::langTab('ES', 'es'),
                self::langTab('FR', 'fr'),
                self::langTab('ZH', 'zh'),

            ])->columnSpanFull(),

            /* =====================
               PRICING
            ===================== */
            Forms\Components\TextInput::make('price')
                ->label('Qiymət')
                ->numeric(),

            Forms\Components\TextInput::make('amazon_price')
                ->label('Amazon Qiyməti')
                ->numeric(),

            Forms\Components\Select::make('currency')
                ->options([
                    'USD' => 'USD',
                    'EUR' => 'EUR',
                ])
                ->default('USD'),

            /* =====================
               BADGES / STATUS
            ===================== */
            Forms\Components\Toggle::make('is_new')
                ->label('New Arrival'),

            Forms\Components\Toggle::make('is_top_seller')
                ->label('Top Seller'),

            Forms\Components\Toggle::make('is_active')
                ->label('Aktiv')
                ->default(true),

            /* =====================
               FEATURES (JSON)
            ===================== */
            Forms\Components\Repeater::make('features')
                ->label('Xüsusiyyətlər')
                ->schema([
                    Forms\Components\TextInput::make('value')
                        ->label('Mətn')
                        ->required(),
                ])
                ->columnSpanFull(),

            /* =====================
               MEDIA & LINKS
            ===================== */
            Forms\Components\FileUpload::make('image')
                ->label('Əsas şəkil')
                ->image()
                ->directory('products'),

            Forms\Components\TextInput::make('amazon_link')
                ->label('Amazon Link')
                ->url(),

            Forms\Components\TextInput::make('detail_page_url')
                ->label('Detail Page URL'),
        ]);
    }

    /* =====================
       TABLE
    ===================== */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Şəkil'),

                Tables\Columns\TextColumn::make('name_az')
                    ->label('Ad')
                    ->searchable(),

                Tables\Columns\TextColumn::make('model_code')
                    ->label('Model'),

                Tables\Columns\TextColumn::make('price')
                    ->label('Qiymət'),

                Tables\Columns\IconColumn::make('is_new')
                    ->label('New')
                    ->boolean(),

                Tables\Columns\IconColumn::make('is_top_seller')
                    ->label('Top')
                    ->boolean(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Aktiv')
                    ->boolean(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\TernaryFilter::make('is_new')->label('New'),
                Tables\Filters\TernaryFilter::make('is_top_seller')->label('Top Seller'),
                Tables\Filters\TernaryFilter::make('is_active')->label('Aktiv'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit'   => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
    public static function getRelations(): array
    {
        return [
            RelationManagers\ImagesRelationManager::class,
            RelationManagers\VideosRelationManager::class,
            RelationManagers\SpecsRelationManager::class,
            RelationManagers\AplusContentsRelationManager::class,
        ];
    }

    /* =====================
       LANG TAB HELPER
    ===================== */
    protected static function langTab(string $label, string $locale)
    {
        return Forms\Components\Tabs\Tab::make($label)->schema([
            Forms\Components\TextInput::make("name_$locale")
                ->label("Name ($label)"),

            Forms\Components\Textarea::make("description_$locale")
                ->label("Description ($label)")
                ->rows(3),
        ]);
    }
}
