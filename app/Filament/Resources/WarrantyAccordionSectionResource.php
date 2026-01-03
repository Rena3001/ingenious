<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WarrantyAccordionSectionResource\Pages;
use App\Models\WarrantyAccordionSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class WarrantyAccordionSectionResource extends Resource
{
    protected static ?string $model = WarrantyAccordionSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';
    protected static ?string $navigationLabel = 'Warranty Accordion';
    protected static ?string $navigationGroup = 'Warranty and Services';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form->schema([

            /* =============================
               BACKGROUND IMAGE
            ============================== */
            Forms\Components\FileUpload::make('background_image')
                ->label('Background Image')
                ->directory('warranty/accordion')
                ->image()
                ->imagePreviewHeight('200')
                ->columnSpanFull(),

            /* =============================
               SECTION TITLE (7 DIL)
            ============================== */
            Forms\Components\Section::make('Section Title')
                ->schema([
                    Forms\Components\Tabs::make('Languages')
                        ->tabs([
                            self::langTab('AZ'),
                            self::langTab('EN'),
                            self::langTab('RU'),
                            self::langTab('DE'),
                            self::langTab('FR'),
                            self::langTab('ES'),
                            self::langTab('ZH'),
                        ]),
                ])
                ->columnSpanFull(),

            /* =============================
               ACCORDION ITEMS (21–24)
            ============================== */
            Forms\Components\Section::make('Accordion Items')
                ->schema([
                    Forms\Components\Repeater::make('items')
                        ->relationship()
                        ->orderable('sort_order')
                        ->schema([
                            Forms\Components\Tabs::make('Item Languages')
                                ->tabs([
                                    self::itemLangTab('AZ'),
                                    self::itemLangTab('EN'),
                                    self::itemLangTab('RU'),
                                    self::itemLangTab('DE'),
                                    self::itemLangTab('FR'),
                                    self::itemLangTab('ES'),
                                    self::itemLangTab('ZH'),
                                ]),

                            Forms\Components\TextInput::make('sort_order')
                                ->numeric()
                                ->default(0),

                            Forms\Components\Toggle::make('is_active')
                                ->label('Active')
                                ->default(true),
                        ])
                        ->defaultItems(4)
                        ->columnSpanFull(),
                ]),

            /* =============================
               CTA EMAIL & STATUS
            ============================== */
            Forms\Components\Section::make('CTA & Settings')
                ->schema([
                    Forms\Components\TextInput::make('cta_email')
                        ->label('CTA Email')
                        ->email()
                        ->placeholder('support@bamoone.com'),

                    Forms\Components\Toggle::make('is_active')
                        ->label('Section Active')
                        ->default(true),
                ])
                ->columns(2),
        ]);
    }

    /* =============================
       TABLE
    ============================== */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('background_image')
                    ->label('Background'),

                Tables\Columns\TextColumn::make('title_en')
                    ->label('Title (EN)')
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
            'index'  => Pages\ListWarrantyAccordionSections::route('/'),
            'create' => Pages\CreateWarrantyAccordionSection::route('/create'),
            'edit'   => Pages\EditWarrantyAccordionSection::route('/{record}/edit'),
        ];
    }

    /* =============================
       HELPERS
    ============================== */
    protected static function langTab(string $lang)
    {
        $l = strtolower($lang);
        return Forms\Components\Tabs\Tab::make($lang)->schema([
            Forms\Components\TextInput::make("title_$l")->label("Title ($lang)"),
        ]);
    }

    protected static function itemLangTab(string $lang)
    {
        $l = strtolower($lang);
        return Forms\Components\Tabs\Tab::make($lang)->schema([
            Forms\Components\TextInput::make("title_$l")->label("Title ($lang)"),
            Forms\Components\Textarea::make("content_$l")->label("Content ($lang)"),
        ]);
    }
}
