<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutSectionTwoResource\Pages;
use App\Models\AboutSectionTwo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;

class AboutSectionTwoResource extends Resource
{
    protected static ?string $model = AboutSectionTwo::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-pie';
    protected static ?string $navigationGroup = 'Site Sections';
    protected static ?string $navigationLabel = 'About Section (Type 2)';
    protected static ?string $modelLabel = 'About Section';
    protected static ?string $pluralModelLabel = 'About Sections';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Tabs::make('About Section Two')
                ->tabs([

                    /* =====================
                       GENERAL
                    ====================== */
                    Tabs\Tab::make('General')
                        ->schema([
                            Forms\Components\FileUpload::make('image')
                                ->label('Section Image')
                                ->disk('public')
                                ->directory('sections/about-section-two')
                                ->image()
                                ->maxFiles(1)
                                ->saveUploadedFileUsing(fn ($file) =>
                                    $file->store('sections/about-section-two', 'public')
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
                       PIE GRAPHS
                    ====================== */
                    Tabs\Tab::make('Pie Graphs')
                        ->schema([
                            self::graphBlock(1),
                            self::graphBlock(2),
                            self::graphBlock(3),
                            self::graphBlock(4),
                        ]),
                ])
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->disk('public')
                    ->label('Image')
                    ->square(),

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
            'index'  => Pages\ListAboutSectionTwos::route('/'),
            'create' => Pages\CreateAboutSectionTwo::route('/create'),
            'edit'   => Pages\EditAboutSectionTwo::route('/{record}/edit'),
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

    private static function graphBlock(int $i): Forms\Components\Fieldset
    {
        return Forms\Components\Fieldset::make("Graph {$i}")
            ->schema([
                Forms\Components\TextInput::make("graph_{$i}_value")
                    ->label('Value (%)')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(100),

                Tabs::make("Graph {$i} Titles")
                    ->tabs([
                        self::graphLangTab($i, 'az'),
                        self::graphLangTab($i, 'en'),
                        self::graphLangTab($i, 'ru'),
                        self::graphLangTab($i, 'es'),
                        self::graphLangTab($i, 'de'),
                        self::graphLangTab($i, 'fr'),
                        self::graphLangTab($i, 'zh'),
                    ])
                    ->columnSpanFull(),
            ])
            ->columnSpanFull();
    }

    private static function graphLangTab(int $i, string $lang): Tabs\Tab
    {
        $label = strtoupper($lang);

        return Tabs\Tab::make($label)
            ->schema([
                Forms\Components\TextInput::make("graph_{$i}_title_{$lang}")
                    ->label("Graph {$i} Title ({$label})")
                    ->maxLength(255),
            ]);
    }
}
