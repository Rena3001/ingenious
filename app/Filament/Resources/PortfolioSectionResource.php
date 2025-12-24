<?php

namespace App\Filament\Resources;

use App\Models\PortfolioSection;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use App\Filament\Resources\PortfolioSectionResource\Pages;

class PortfolioSectionResource extends Resource
{
    protected static ?string $model = PortfolioSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';
    protected static ?string $navigationLabel = 'Portfolio Sections';
    protected static ?string $navigationGroup = 'Site Content';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([

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
                ->label('Description')
                ->rows(3),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title_en')->label('Title (EN)')->searchable(),
            Tables\Columns\IconColumn::make('is_active')->boolean(),
            Tables\Columns\TextColumn::make('created_at')->dateTime()->since(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPortfolioSections::route('/'),
            'create' => Pages\CreatePortfolioSection::route('/create'),
            'edit' => Pages\EditPortfolioSection::route('/{record}/edit'),
        ];
    }
}
