<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WarrantyProcessSectionResource\Pages;
use App\Models\WarrantyProcessSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;

class WarrantyProcessSectionResource extends Resource
{
    protected static ?string $model = WarrantyProcessSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-shield-check';
    protected static ?string $navigationGroup = 'Warranty and Services';
    protected static ?string $navigationLabel = 'Warranty Process';
    protected static ?string $modelLabel = 'Warranty Process Section';

    public static function form(Form $form): Form
    {
        return $form->schema([

            Tabs::make('Warranty Process Section')->tabs([

                /* =====================
                   GENERAL
                ====================== */
                Tabs\Tab::make('General')->schema([

                    Forms\Components\FileUpload::make('background_image')
                        ->label('Background Image')
                        ->disk('public')
                        ->directory('sections/warranty-process')
                        ->image(),

                    Forms\Components\TextInput::make('button_link')
                        ->label('CTA Button Link'),

                    Forms\Components\Toggle::make('is_active')
                        ->label('Active')
                        ->default(true),
                ]),

                /* =====================
                   MAIN CONTENT
                ====================== */
                Tabs\Tab::make('Main Content')->schema([
                    Tabs::make('Languages')->tabs([
                        self::mainLangTab('az'),
                        self::mainLangTab('en'),
                        self::mainLangTab('ru'),
                        self::mainLangTab('de'),
                        self::mainLangTab('fr'),
                        self::mainLangTab('es'),
                        self::mainLangTab('zh'),
                    ]),
                ]),

                /* =====================
                   ICON 1
                ====================== */
                self::iconTab(1),

                /* =====================
                   ICON 2
                ====================== */
                self::iconTab(2),

                /* =====================
                   ICON 3
                ====================== */
                self::iconTab(3),

            ])->columnSpanFull(),
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
                    ->limit(30),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListWarrantyProcessSections::route('/'),
            'create' => Pages\CreateWarrantyProcessSection::route('/create'),
            'edit'   => Pages\EditWarrantyProcessSection::route('/{record}/edit'),
        ];
    }

    /* =====================
       MAIN CONTENT LANG TAB
    ====================== */
    private static function mainLangTab(string $lang): Tabs\Tab
    {
        $label = strtoupper($lang);

        return Tabs\Tab::make($label)->schema([
            Forms\Components\TextInput::make("title_{$lang}")
                ->label("Title ({$label})")
                ->maxLength(255),

            Forms\Components\Textarea::make("description_{$lang}")
                ->label("Description ({$label})")
                ->rows(4),
        ]);
    }

    /* =====================
       ICON TAB BUILDER
    ====================== */
    private static function iconTab(int $index): Tabs\Tab
    {
        return Tabs\Tab::make("Icon {$index}")->schema([

            Forms\Components\TextInput::make("icon_{$index}")
                ->label("Icon {$index} (class)")
                ->placeholder('fa fa-shield / flaticon-lock'),

            Tabs::make("Icon {$index} Content")->tabs([
                self::iconLangTab($index, 'az'),
                self::iconLangTab($index, 'en'),
                self::iconLangTab($index, 'ru'),
                self::iconLangTab($index, 'de'),
                self::iconLangTab($index, 'fr'),
                self::iconLangTab($index, 'es'),
                self::iconLangTab($index, 'zh'),
            ]),
        ]);
    }

    private static function iconLangTab(int $index, string $lang): Tabs\Tab
    {
        $label = strtoupper($lang);

        return Tabs\Tab::make($label)->schema([
            Forms\Components\TextInput::make("icon_{$index}_title_{$lang}")
                ->label("Title ({$label})"),

            Forms\Components\Textarea::make("icon_{$index}_desc_{$lang}")
                ->label("Description ({$label})")
                ->rows(3),
        ]);
    }
}
