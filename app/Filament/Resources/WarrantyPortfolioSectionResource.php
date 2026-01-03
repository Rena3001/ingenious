<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WarrantyPortfolioSectionResource\Pages;
use App\Models\WarrantyPortfolioSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class WarrantyPortfolioSectionResource extends Resource
{
    protected static ?string $model = WarrantyPortfolioSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Warranty Available Products Section';
    protected static ?string $navigationGroup = 'Warranty and Services';
    protected static ?int $navigationSort = 4;

    /* =============================
       FORM
    ============================== */
    public static function form(Form $form): Form
    {
        return $form->schema([

            /* =============================
               SECTION CONTENT (27–27.4)
            ============================== */
            Forms\Components\Section::make('Section Content')
                ->schema([
                    Forms\Components\Tabs::make('Languages')
                        ->tabs([
                            self::sectionTab('AZ'),
                            self::sectionTab('EN'),
                            self::sectionTab('RU'),
                            self::sectionTab('DE'),
                            self::sectionTab('FR'),
                            self::sectionTab('ES'),
                            self::sectionTab('ZH'),
                        ]),
                ])
                ->columnSpanFull(),

            /* =============================
               ITEMS (28–30)
            ============================== */
            Forms\Components\Section::make('Products')
                ->schema([
                    Forms\Components\Repeater::make('items')
                        ->relationship()
                        ->orderable('sort_order')
                        ->schema([

                            Forms\Components\FileUpload::make('image')
                                ->label('Product Image')
                                ->directory('products')
                                ->image()
                                ->imagePreviewHeight('150')
                                ->required(),

                            Forms\Components\Tabs::make('Item Languages')
                                ->tabs([
                                    self::itemTab('AZ'),
                                    self::itemTab('EN'),
                                    self::itemTab('RU'),
                                    self::itemTab('DE'),
                                    self::itemTab('FR'),
                                    self::itemTab('ES'),
                                    self::itemTab('ZH'),
                                ]),

                            Forms\Components\TextInput::make('link')
                                ->label('Product Link')
                                ->placeholder('/product/BO1-1-10MB'),

                            Forms\Components\TextInput::make('sort_order')
                                ->numeric()
                                ->default(0),

                            Forms\Components\Toggle::make('is_active')
                                ->label('Active')
                                ->default(true),
                        ])
                        ->defaultItems(3)
                        ->columnSpanFull(),
                ]),
        ]);
    }

    /* =============================
       TABLE
    ============================== */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_en')
                    ->label('Section Title')
                    ->searchable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    /* =============================
       PAGES
    ============================== */
    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListWarrantyPortfolioSections::route('/'),
            'create' => Pages\CreateWarrantyPortfolioSection::route('/create'),
            'edit'   => Pages\EditWarrantyPortfolioSection::route('/{record}/edit'),
        ];
    }

    /* =============================
       HELPERS
    ============================== */
    protected static function sectionTab(string $lang)
    {
        $l = strtolower($lang);

        return Forms\Components\Tabs\Tab::make($lang)->schema([
            Forms\Components\TextInput::make("title_$l")
                ->label("Title ($lang)")
                ->required(),

            Forms\Components\Textarea::make("description_$l")
                ->label("Description ($lang)"),
        ]);
    }

    protected static function itemTab(string $lang)
    {
        $l = strtolower($lang);

        return Forms\Components\Tabs\Tab::make($lang)->schema([
            Forms\Components\TextInput::make("title_$l")
                ->label("Product Name ($lang)")
                ->required(),

            Forms\Components\Textarea::make("description_$l")
                ->label("Short Description ($lang)")
                ->rows(2),
        ]);
    }
}
