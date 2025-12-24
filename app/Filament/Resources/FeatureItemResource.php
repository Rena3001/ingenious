<?php

namespace App\Filament\Resources;

use App\Models\FeatureItem;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use App\Filament\Resources\FeatureItemResource\Pages;

class FeatureItemResource extends Resource
{
    protected static ?string $model = FeatureItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';
    protected static ?string $navigationLabel = 'Feature Items';
    protected static ?string $navigationGroup = 'Home Page';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\Section::make('General')
                ->schema([
                    Forms\Components\Select::make('feature_section_id')
                        ->relationship('section', 'title_en')
                        ->required(),

                    Forms\Components\TextInput::make('icon')
                        ->label('Icon class')
                        ->placeholder('flaticon-cctv-1'),
                ])->columns(2),

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

            Forms\Components\Section::make('Settings')
                ->schema([
                    Forms\Components\TextInput::make('sort_order')
                        ->numeric()
                        ->default(0),

                    Forms\Components\Toggle::make('is_active')
                        ->label('Active'),
                ])->columns(2),
        ]);
    }

    protected static function langTab(string $lang, string $label)
    {
        return Forms\Components\Tabs\Tab::make($label)->schema([
            Forms\Components\TextInput::make("title_$lang")
                ->label('Title'),

            Forms\Components\Textarea::make("text_$lang")
                ->label('Text')
                ->rows(2),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('section.title_en')
                ->label('Section'),

            Tables\Columns\TextColumn::make('title_en')
                ->label('Title'),

            Tables\Columns\TextColumn::make('sort_order')
                ->sortable(),

            Tables\Columns\IconColumn::make('is_active')->boolean(),
        ])->defaultSort('sort_order');
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListFeatureItems::route('/'),
            'create' => Pages\CreateFeatureItem::route('/create'),
            'edit'   => Pages\EditFeatureItem::route('/{record}/edit'),
        ];
    }
}
