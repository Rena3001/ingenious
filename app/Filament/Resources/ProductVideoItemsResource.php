<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductVideoItemsResource\Pages;
use App\Models\ProductVideoItems;
use App\Models\ProductVideoSections;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;

class ProductVideoItemsResource extends Resource
{
    protected static ?string $model = ProductVideoItems::class;

    protected static ?string $navigationIcon = 'heroicon-o-play-circle';
    protected static ?string $navigationGroup = 'Technical Services';
    protected static ?string $navigationLabel = 'Video Products';

    public static function form(Form $form): Form
    {
        return $form->schema([

            Forms\Components\Select::make('product_video_section_id')
                ->label('Video Section')
                ->options(ProductVideoSections::pluck('title_en', 'id'))
                ->required(),

            Forms\Components\Select::make('category')
                ->options([
                    'security' => 'Security Products',
                    'home_appliances' => 'Home Appliances',
                    'electrical_equipment' => 'Electrical Equipment',
                    'consumer_electronics' => 'Consumer Electronics',
                ])
                ->required(),

            Forms\Components\FileUpload::make('image')
                ->disk('public')
                ->directory('products/video')
                ->image()
                ->columnSpanFull(),

            Tabs::make('Content')
                ->tabs([
                    self::langTab('az'),
                    self::langTab('en'),
                    self::langTab('ru'),
                    self::langTab('es'),
                    self::langTab('de'),
                    self::langTab('fr'),
                    self::langTab('zh'),
                ])
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->disk('public'),

                Tables\Columns\TextColumn::make('title_en')
                    ->label('Title (EN)')
                    ->limit(30),

                Tables\Columns\TextColumn::make('category')
                    ->badge(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListProductVideoItems::route('/'),
            'create' => Pages\CreateProductVideoItems::route('/create'),
            'edit'   => Pages\EditProductVideoItems::route('/{record}/edit'),
        ];
    }

    private static function langTab(string $lang): Tabs\Tab
    {
        $label = strtoupper($lang);

        return Tabs\Tab::make($label)
            ->schema([
                Forms\Components\TextInput::make("title_{$lang}")
                    ->label("Title ({$label})"),

                Forms\Components\Textarea::make("description_{$lang}")
                    ->label("Description ({$label})")
                    ->rows(3),
            ]);
    }
}
