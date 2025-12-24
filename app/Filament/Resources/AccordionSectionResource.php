<?php

namespace App\Filament\Resources;

use App\Models\AccordionSection;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use App\Filament\Resources\AccordionSectionResource\Pages;

class AccordionSectionResource extends Resource
{
    protected static ?string $model = AccordionSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Accordion Sections';
    protected static ?string $navigationGroup = 'Site Content';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([

            Forms\Components\Section::make('Background')
                ->schema([
                    Forms\Components\FileUpload::make('background_image')
                        ->image()
                        ->directory('accordions')
                        ->label('Background Image'),
                ]),

            Forms\Components\Section::make('Titles')
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

            Forms\Components\Toggle::make('is_active')->label('Aktiv'),
        ]);
    }

    protected static function langTab(string $lang, string $label)
    {
        return Forms\Components\Tabs\Tab::make($label)->schema([
            Forms\Components\TextInput::make("title_$lang")
                ->label('Title')
                ->maxLength(255),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('background_image')->label('BG'),
            Tables\Columns\TextColumn::make('title_en')->label('Title (EN)'),
            Tables\Columns\IconColumn::make('is_active')->boolean(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAccordionSections::route('/'),
            'create' => Pages\CreateAccordionSection::route('/create'),
            'edit' => Pages\EditAccordionSection::route('/{record}/edit'),
        ];
    }
}
