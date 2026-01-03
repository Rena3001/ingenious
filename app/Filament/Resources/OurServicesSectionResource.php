<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OurServicesSectionResource\Pages;
use App\Models\OurServicesSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;

class OurServicesSectionResource extends Resource
{
    protected static ?string $model = OurServicesSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'Technical Services';
    protected static ?string $navigationLabel = 'Our Services';
    protected static ?string $modelLabel = 'Our Services Section';
    protected static ?string $pluralModelLabel = 'Our Services Sections';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Tabs::make('Our Services Section')
                ->tabs([

                    /* =====================
                       GENERAL
                    ====================== */
                    Tabs\Tab::make('General')
                        ->schema([
                            Forms\Components\TextInput::make('sort_order')
                                ->numeric()
                                ->label('Sort Order')
                                ->default(1),

                            Forms\Components\FileUpload::make('background_image')
                                ->label('Background Image')
                                ->disk('public')
                                ->directory('sections/our-services')
                                ->image()
                                ->maxFiles(1)
                                ->saveUploadedFileUsing(fn ($file) =>
                                    $file->store('sections/our-services', 'public')
                                )
                                ->columnSpanFull(),
                        ]),

                    /* =====================
                       SECTION CONTENT
                    ====================== */
                    Tabs\Tab::make('Section Content')
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
                       SERVICES (3 ICONS)
                    ====================== */
                    Tabs\Tab::make('Services')
                        ->schema([
                            self::serviceBlock(1),
                            self::serviceBlock(2),
                            self::serviceBlock(3),
                        ]),
                ])
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable(),

                Tables\Columns\TextColumn::make('title_en')
                    ->label('Title (EN)')
                    ->limit(40),
            ])
            ->defaultSort('sort_order')
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListOurServicesSections::route('/'),
            'create' => Pages\CreateOurServicesSection::route('/create'),
            'edit'   => Pages\EditOurServicesSection::route('/{record}/edit'),
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

    private static function serviceBlock(int $i): Forms\Components\Fieldset
    {
        return Forms\Components\Fieldset::make("Service {$i}")
            ->schema([
                Forms\Components\TextInput::make("service_{$i}_icon")
                    ->label('Icon Class (fa-solid fa-book)')
                    ->helperText('Font Awesome və ya Flaticon class adı'),

                Tabs::make("Titles")
                    ->tabs([
                        self::serviceLangTab($i, 'az'),
                        self::serviceLangTab($i, 'en'),
                        self::serviceLangTab($i, 'ru'),
                        self::serviceLangTab($i, 'es'),
                        self::serviceLangTab($i, 'de'),
                        self::serviceLangTab($i, 'fr'),
                        self::serviceLangTab($i, 'zh'),
                    ])
                    ->columnSpanFull(),

                Tabs::make("Texts")
                    ->tabs([
                        self::serviceTextLangTab($i, 'az'),
                        self::serviceTextLangTab($i, 'en'),
                        self::serviceTextLangTab($i, 'ru'),
                        self::serviceTextLangTab($i, 'es'),
                        self::serviceTextLangTab($i, 'de'),
                        self::serviceTextLangTab($i, 'fr'),
                        self::serviceTextLangTab($i, 'zh'),
                    ])
                    ->columnSpanFull(),

                Forms\Components\TextInput::make("service_{$i}_button_url")
                    ->label('Button URL')
                    ->url(),
            ])
            ->columnSpanFull();
    }

    private static function serviceLangTab(int $i, string $lang): Tabs\Tab
    {
        $label = strtoupper($lang);

        return Tabs\Tab::make($label)
            ->schema([
                Forms\Components\TextInput::make("service_{$i}_title_{$lang}")
                    ->label("Title ({$label})")
                    ->maxLength(255),
            ]);
    }

    private static function serviceTextLangTab(int $i, string $lang): Tabs\Tab
    {
        $label = strtoupper($lang);

        return Tabs\Tab::make($label)
            ->schema([
                Forms\Components\Textarea::make("service_{$i}_text_{$lang}")
                    ->label("Text ({$label})")
                    ->rows(4),
            ]);
    }
}
