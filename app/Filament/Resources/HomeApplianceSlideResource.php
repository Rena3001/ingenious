<?php

namespace App\Filament\Resources;

use App\Models\HomeApplianceSlide;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use App\Filament\Resources\HomeApplianceSlideResource\Pages;

class HomeApplianceSlideResource extends Resource
{
    protected static ?string $model = HomeApplianceSlide::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Home Appliances Slider';
    protected static ?string $navigationGroup = 'Home Page';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([

            Forms\Components\Section::make('Images')
                ->schema([
                    Forms\Components\FileUpload::make('background_image')
                        ->label('Background Image')
                        ->image()
                        ->directory('sliders'),
                ])->columns(1),

            Forms\Components\Section::make('Texts')
                ->schema([
                    Forms\Components\Tabs::make('Languages')->tabs([
                        self::langTab('az','AZ'),
                        self::langTab('en','EN'),
                        self::langTab('ru','RU'),
                        self::langTab('de','DE'),
                        self::langTab('fr','FR'),
                        self::langTab('es','ES'),
                        self::langTab('zh','ZH'),
                    ]),
                ]),

            Forms\Components\Section::make('Button')
                ->schema([
                    Forms\Components\TextInput::make('button_link')
                        ->label('Button Link')
                        ->placeholder('/services'),

                    Forms\Components\TextInput::make('sort_order')
                        ->numeric()
                        ->label('Sort Order'),
                ])->columns(2),

            Forms\Components\Toggle::make('is_active')
                ->label('Active'),
        ]);
    }

    protected static function langTab(string $lang, string $label)
    {
        return Forms\Components\Tabs\Tab::make($label)->schema([
            Forms\Components\TextInput::make("title_$lang")
                ->label('Title'),

            Forms\Components\TextInput::make("subtitle_$lang")
                ->label('Subtitle'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('background_image')->label('BG'),
            Tables\Columns\TextColumn::make('title_en')->label('Title'),
            Tables\Columns\TextColumn::make('sort_order')->sortable(),
            Tables\Columns\IconColumn::make('is_active')->boolean(),
        ])->defaultSort('sort_order');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHomeApplianceSlides::route('/'),
            'create' => Pages\CreateHomeApplianceSlide::route('/create'),
            'edit' => Pages\EditHomeApplianceSlide::route('/{record}/edit'),
        ];
    }
}
