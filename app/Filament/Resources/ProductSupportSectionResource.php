<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductSupportSectionResource\Pages;
use App\Models\ProductSupportSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;

class ProductSupportSectionResource extends Resource
{
    protected static ?string $model = ProductSupportSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-speaker-wave';
    protected static ?string $navigationGroup = 'Site Sections';
    protected static ?string $navigationLabel = 'Product Supports';
    protected static ?string $modelLabel = 'Product Support';
    protected static ?string $pluralModelLabel = 'Product Supports';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Product Supports')
                    ->tabs([

                        /* =========================
                           GENERAL TAB
                        ========================== */
                        Tabs\Tab::make('General')
                            ->schema([
                                Forms\Components\FileUpload::make('background_image')
                                    ->label('Background Image')
                                    ->disk('public')
                                    ->directory('sections/product-supports')
                                    ->image()
                                    ->imageEditor()
                                    ->openable()
                                    ->downloadable()
                                    ->columnSpanFull(),

                                Forms\Components\FileUpload::make('image')
                                    ->label('Main Image')
                                    ->disk('public')
                                    ->directory('sections/product-supports')
                                    ->image()
                                    ->imageEditor()
                                    ->openable()
                                    ->downloadable()
                                    ->columnSpanFull(),

                                Forms\Components\TextInput::make('button_url')
                                    ->label('Button URL')
                                    ->placeholder('/audio')
                                    ->maxLength(255)
                                    ->columnSpanFull(),

                                Forms\Components\Toggle::make('is_active')
                                    ->label('Active')
                                    ->default(true),
                            ]),

                        /* =========================
                           CONTENT / LANGUAGES
                        ========================== */
                        Tabs\Tab::make('Content')
                            ->schema([
                                Tabs::make('Languages')
                                    ->tabs([
                                        self::langTab('az'),
                                        self::langTab('en'),
                                        self::langTab('ru'),
                                        self::langTab('de'),
                                        self::langTab('fr'),
                                        self::langTab('es'),
                                        self::langTab('zh'),
                                    ])
                                    ->columnSpanFull(),
                            ]),

                        /* =========================
                           ICONS TAB
                        ========================== */
                        Tabs\Tab::make('Icons')
                            ->schema([
                                Forms\Components\Section::make('Icon 1')
                                    ->schema([
                                        Forms\Components\TextInput::make('icon_1')
                                            ->label('Icon Class')
                                            ->placeholder('flaticon-speaker-2')
                                            ->maxLength(255)
                                            ->required(),

                                        Forms\Components\TextInput::make('icon_1_url')
                                            ->label('Icon URL')
                                            ->placeholder('# or /audio')
                                            ->maxLength(255),
                                    ])->columns(2),

                                Forms\Components\Section::make('Icon 2')
                                    ->schema([
                                        Forms\Components\TextInput::make('icon_2')
                                            ->label('Icon Class')
                                            ->placeholder('flaticon-old-radio-microphone')
                                            ->maxLength(255)
                                            ->required(),

                                        Forms\Components\TextInput::make('icon_2_url')
                                            ->label('Icon URL')
                                            ->maxLength(255),
                                    ])->columns(2),

                                Forms\Components\Section::make('Icon 3')
                                    ->schema([
                                        Forms\Components\TextInput::make('icon_3')
                                            ->label('Icon Class')
                                            ->placeholder('flaticon-speaker')
                                            ->maxLength(255)
                                            ->required(),

                                        Forms\Components\TextInput::make('icon_3_url')
                                            ->label('Icon URL')
                                            ->maxLength(255),
                                    ])->columns(2),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('background_image')
                    ->disk('public')
                    ->label('BG')
                    ->square(),

                Tables\Columns\TextColumn::make('title_en')
                    ->label('Title (EN)')
                    ->limit(40)
                    ->searchable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
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
            'index'  => Pages\ListProductSupportSections::route('/'),
            'create' => Pages\CreateProductSupportSection::route('/create'),
            'edit'   => Pages\EditProductSupportSection::route('/{record}/edit'),
        ];
    }

    /* =========================
       LANGUAGE TAB HELPER
    ========================== */
    private static function langTab(string $lang): Tabs\Tab
    {
        $label = strtoupper($lang);

        return Tabs\Tab::make($label)
            ->schema([
                Forms\Components\TextInput::make("title_{$lang}")
                    ->label("Title ({$label})")
                    ->maxLength(255)
                    ->columnSpanFull(),

                Forms\Components\Textarea::make("description_{$lang}")
                    ->label("Description ({$label})")
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }
}
