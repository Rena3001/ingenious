<?php

namespace App\Filament\Resources;

use App\Models\FeatureSection;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use App\Filament\Resources\FeatureSectionResource\Pages;

class FeatureSectionResource extends Resource
{
    protected static ?string $model = FeatureSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Features Section';
    protected static ?string $navigationGroup = 'Home Page';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\Section::make('Background')
                ->schema([
                    Forms\Components\FileUpload::make('background_image')
                        ->label('Background Image')
                        ->image()
                        ->directory('features'),
                ]),

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
                        ->placeholder('/brochure'),
                ]),

            Forms\Components\Toggle::make('is_active')
                ->label('Active'),
        ]);
    }

    protected static function langTab(string $lang, string $label)
    {
        return Forms\Components\Tabs\Tab::make($label)->schema([
            Forms\Components\TextInput::make("title_$lang")
                ->label('Title'),

            Forms\Components\Textarea::make("description_$lang")
                ->label('Description')
                ->rows(3),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('background_image')->label('BG'),
            Tables\Columns\TextColumn::make('title_en')->label('Title'),
            Tables\Columns\IconColumn::make('is_active')->boolean(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListFeatureSections::route('/'),
            'create' => Pages\CreateFeatureSection::route('/create'),
            'edit'   => Pages\EditFeatureSection::route('/{record}/edit'),
        ];
    }
}
