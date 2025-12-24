<?php

namespace App\Filament\Resources;

use App\Models\PortfolioItem;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use App\Filament\Resources\PortfolioItemResource\Pages;

class PortfolioItemResource extends Resource
{
    protected static ?string $model = PortfolioItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Portfolio Items';
    protected static ?string $navigationGroup = 'Site Content';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([

            Forms\Components\Select::make('portfolio_section_id')
                ->relationship('section', 'title_en')
                ->required()
                ->label('Portfolio Section'),

            Forms\Components\FileUpload::make('image')
                ->image()
                ->directory('portfolio')
                ->label('Image'),

            Forms\Components\TextInput::make('product_url')
                ->label('Product URL')
                ->url()
                ->columnSpanFull(),

            Forms\Components\TextInput::make('sort_order')
                ->numeric()
                ->default(0),

            Forms\Components\Section::make('Content')
                ->schema([
                    Forms\Components\Tabs::make('Languages')->tabs([
                        self::langTab('az', 'AZ'),
                        self::langTab('en', 'EN'),
                        self::langTab('ru', 'RU'),
                        self::langTab('de', 'DE'),
                        self::langTab('fr', 'FR'),
                        self::langTab('es', 'ES'),
                        self::langTab('zh', 'ZH'),
                    ]),
                ]),

            Forms\Components\Toggle::make('is_active')
                ->label('Active')
                ->default(true),
        ]);
    }

    protected static function langTab(string $lang, string $label)
    {
        return Forms\Components\Tabs\Tab::make($label)->schema([
            Forms\Components\TextInput::make("title_$lang")
                ->label('Title')
                ->maxLength(255),

            Forms\Components\Textarea::make("description_$lang")
                ->label('Short Description')
                ->rows(3),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('image')->label('Image'),
            Tables\Columns\TextColumn::make('title_en')->label('Title')->searchable(),
            Tables\Columns\TextColumn::make('section.title_en')->label('Section'),
            Tables\Columns\TextColumn::make('sort_order')->sortable(),
            Tables\Columns\IconColumn::make('is_active')->boolean(),
        ])->defaultSort('sort_order');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPortfolioItems::route('/'),
            'create' => Pages\CreatePortfolioItem::route('/create'),
            'edit' => Pages\EditPortfolioItem::route('/{record}/edit'),
        ];
    }
}
