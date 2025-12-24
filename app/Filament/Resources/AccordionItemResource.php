<?php

namespace App\Filament\Resources;

use App\Models\AccordionItem;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use App\Filament\Resources\AccordionItemResource\Pages;

class AccordionItemResource extends Resource
{
    protected static ?string $model = AccordionItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-bars-3';
    protected static ?string $navigationLabel = 'Accordion Items';
    protected static ?string $navigationGroup = 'Site Content';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([

            Forms\Components\Select::make('accordion_section_id')
                ->relationship('section', 'title_en')
                ->required()
                ->label('Accordion Section'),

            Forms\Components\TextInput::make('icon')
                ->label('Icon class (fa fa-plus)')
                ->placeholder('fa fa-plus'),

            Forms\Components\TextInput::make('sort_order')
                ->numeric()
                ->default(0),

            Forms\Components\Section::make('Translations')
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
            Forms\Components\TextInput::make("title_$lang")->label('Title'),
            Forms\Components\Textarea::make("content_$lang")
                ->rows(3)
                ->label('Content'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title_en')->label('Title'),
            Tables\Columns\TextColumn::make('section.title_en')->label('Section'),
            Tables\Columns\TextColumn::make('sort_order')->sortable(),
            Tables\Columns\IconColumn::make('is_active')->boolean(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAccordionItems::route('/'),
            'create' => Pages\CreateAccordionItem::route('/create'),
            'edit' => Pages\EditAccordionItem::route('/{record}/edit'),
        ];
    }
}
