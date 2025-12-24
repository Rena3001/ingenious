<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeatureSectionTwoResource\Pages;
use App\Models\FeatureSectionTwo;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;

class FeatureSectionTwoResource extends Resource
{
    protected static ?string $model = FeatureSectionTwo::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';
    protected static ?string $navigationLabel = 'Features Section (Style Two)';
    protected static ?string $navigationGroup = 'Site Content';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([

            /* ================= BACKGROUND ================= */
            Forms\Components\Section::make('Background')
                ->schema([
                    Forms\Components\FileUpload::make('background_image')
                        ->label('Background Image')
                        ->image()
                        ->directory('features')
                        ->imageEditor(),
                ]),

            /* ================= TITLE & DESCRIPTION ================= */
            Forms\Components\Section::make('Title & Description')
                ->schema([
                    Forms\Components\Tabs::make('Languages')->tabs([
                        self::langTab('az'),
                        self::langTab('en'),
                        self::langTab('ru'),
                        self::langTab('de'),
                        self::langTab('fr'),
                        self::langTab('es'),
                        self::langTab('zh'),
                    ]),
                ]),

            /* ================= ICON 1 ================= */
            self::iconSection(1),

            /* ================= ICON 2 ================= */
            self::iconSection(2),

            /* ================= ICON 3 ================= */
            self::iconSection(3),

        ]);
    }

    /* ---------- Language Tab ---------- */
    protected static function langTab(string $lang): Forms\Components\Tabs\Tab
    {
        return Forms\Components\Tabs\Tab::make(strtoupper($lang))
            ->schema([
                Forms\Components\TextInput::make("title_$lang")
                    ->label('Title')
                    ->maxLength(255),

                Forms\Components\Textarea::make("description_$lang")
                    ->label('Description')
                    ->rows(3),
            ]);
    }

    /* ---------- Icon Section ---------- */
    protected static function iconSection(int $i): Forms\Components\Section
    {
        return Forms\Components\Section::make("Icon $i")
            ->schema([
                Forms\Components\TextInput::make("icon_$i")
                    ->label("Flaticon Class (icon_$i)")
                    ->placeholder('flaticon-laptop-2')
                    ->helperText('Only flaticon class name'),

                Forms\Components\Tabs::make("Icon {$i} Titles")->tabs([
                    self::iconLangTab($i, 'az'),
                    self::iconLangTab($i, 'en'),
                    self::iconLangTab($i, 'ru'),
                    self::iconLangTab($i, 'de'),
                    self::iconLangTab($i, 'fr'),
                    self::iconLangTab($i, 'es'),
                    self::iconLangTab($i, 'zh'),
                ]),
            ])->columns(1);
    }

    protected static function iconLangTab(int $i, string $lang): Forms\Components\Tabs\Tab
    {
        return Forms\Components\Tabs\Tab::make(strtoupper($lang))
            ->schema([
                Forms\Components\TextInput::make("icon_{$i}_title_$lang")
                    ->label("Icon $i Title")
                    ->maxLength(255),
            ]);
    }

    /* ================= TABLE ================= */
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('background_image')
                    ->label('BG')
                    ->square(),

                Tables\Columns\TextColumn::make('title_en')
                    ->label('Title (EN)')
                    ->limit(30),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([]); // ❌ bulk delete yoxdur
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFeatureSectionTwos::route('/'),
            'edit' => Pages\EditFeatureSectionTwo::route('/{record}/edit'),
        ];
    }
}
