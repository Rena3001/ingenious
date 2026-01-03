<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaqSectionResource\Pages;
use App\Models\FaqSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;

class FaqSectionResource extends Resource
{
    protected static ?string $model = FaqSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';
    protected static ?string $navigationGroup = 'Technical Services';
    protected static ?string $navigationLabel = 'FAQ Section';
    protected static ?string $modelLabel = 'FAQ Section';
    protected static ?string $pluralModelLabel = 'FAQ Sections';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Tabs::make('FAQ Section')
                ->tabs([

                    /* =====================
                       GENERAL
                    ====================== */
                    Tabs\Tab::make('General')
                        ->schema([
                            Forms\Components\FileUpload::make('background_image')
                                ->label('Background Image')
                                ->disk('public')
                                ->directory('sections/faq')
                                ->image()
                                ->maxFiles(1)
                                ->saveUploadedFileUsing(fn ($file) =>
                                    $file->store('sections/faq', 'public')
                                )
                                ->columnSpanFull(),
                            Forms\Components\FileUpload::make('image')
                                ->label('Image')
                                ->disk('public')
                                ->directory('sections/faq')
                                ->image()
                                ->maxFiles(1)
                                ->saveUploadedFileUsing(fn ($file) =>
                                    $file->store('sections/faq', 'public')
                                )
                                ->columnSpanFull(),
                        ]),

                    /* =====================
                       CONTENT
                    ====================== */
                    Tabs\Tab::make('Content')
                        ->schema([
                            Tabs::make('Languages')
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
                        ]),

                    /* =====================
                       FAQ CATEGORIES (17.2)
                    ====================== */
                    Tabs\Tab::make('FAQ Categories')
                        ->schema([
                            self::featureBlock(1, true),
                            self::featureBlock(2, false),
                            self::featureBlock(3, false),
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
                    ->label('Background'),

                Tables\Columns\TextColumn::make('title_en')
                    ->label('Title (EN)')
                    ->limit(40),
            ])
            ->defaultSort('id', 'desc')
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListFaqSections::route('/'),
            'create' => Pages\CreateFaqSection::route('/create'),
            'edit'   => Pages\EditFaqSection::route('/{record}/edit'),
        ];
    }

    /* =====================
       HELPERS
    ====================== */

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

    private static function featureBlock(int $i, bool $withText): Forms\Components\Fieldset
    {
        return Forms\Components\Fieldset::make("Category {$i}")
            ->schema(array_filter([
                Forms\Components\TextInput::make("feature_{$i}_icon")
                    ->label('Icon Class (fa-solid fa-question)')
                    ->helperText('Font Awesome və ya Flaticon class adı')
                    ->required(),

                Tabs::make("Titles")
                    ->tabs([
                        self::featureLangTab($i, 'az'),
                        self::featureLangTab($i, 'en'),
                        self::featureLangTab($i, 'ru'),
                        self::featureLangTab($i, 'es'),
                        self::featureLangTab($i, 'de'),
                        self::featureLangTab($i, 'fr'),
                        self::featureLangTab($i, 'zh'),
                    ])
                    ->columnSpanFull(),

                $withText
                    ? Tabs::make("Descriptions")
                        ->tabs([
                            self::featureTextLangTab($i, 'az'),
                            self::featureTextLangTab($i, 'en'),
                            self::featureTextLangTab($i, 'ru'),
                            self::featureTextLangTab($i, 'es'),
                            self::featureTextLangTab($i, 'de'),
                            self::featureTextLangTab($i, 'fr'),
                            self::featureTextLangTab($i, 'zh'),
                        ])
                        ->columnSpanFull()
                    : null,
            ]))
            ->columnSpanFull();
    }

    private static function featureLangTab(int $i, string $lang): Tabs\Tab
    {
        $label = strtoupper($lang);

        return Tabs\Tab::make($label)
            ->schema([
                Forms\Components\TextInput::make("feature_{$i}_title_{$lang}")
                    ->label("Title ({$label})")
                    ->maxLength(255),
            ]);
    }

    private static function featureTextLangTab(int $i, string $lang): Tabs\Tab
    {
        $label = strtoupper($lang);

        return Tabs\Tab::make($label)
            ->schema([
                Forms\Components\Textarea::make("feature_{$i}_text_{$lang}")
                    ->label("Text ({$label})")
                    ->rows(3),
            ]);
    }
}
