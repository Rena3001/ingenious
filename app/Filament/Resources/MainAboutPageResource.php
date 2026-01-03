<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MainAboutPageResource\Pages;
use App\Models\MainAboutPage;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Str;

class MainAboutPageResource extends Resource
{
    protected static ?string $model = MainAboutPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationLabel = 'Main About';
    protected static ?string $modelLabel = 'Main About';
    protected static ?string $navigationGroup = 'Main About';
    protected static ?string $pluralModelLabel = 'Main About';

    public static function form(Form $form): Form
    {
        return $form->schema([

            Forms\Components\TextInput::make('slug')
                ->required()
                ->unique(ignoreRecord: true)
                ->default('about-bamoone')
                ->reactive()
                ->afterStateUpdated(fn ($state, $set) =>
                    $set('slug', Str::slug($state))
                ),

            Forms\Components\Toggle::make('is_active')
                ->label('Aktiv')
                ->default(true),

            /* =====================
                LANG TABS
            ===================== */
            Forms\Components\Tabs::make('Languages')->tabs([
                self::langTab('AZ', 'az'),
                self::langTab('EN', 'en'),
                self::langTab('RU', 'ru'),
                self::langTab('DE', 'de'),
                self::langTab('ES', 'es'),
                self::langTab('FR', 'fr'),
                self::langTab('ZH', 'zh'),
            ])->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('slug')->label('Slug'),
                Tables\Columns\IconColumn::make('is_active')->boolean()->label('Aktiv'),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            MainAboutPageResource\RelationManagers\GalleryRelationManager::class,
            MainAboutPageResource\RelationManagers\SectionsRelationManager::class,
            MainAboutPageResource\RelationManagers\CeoMessageRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListMainAboutPages::route('/'),
            'create' => Pages\CreateMainAboutPage::route('/create'),
            'edit'   => Pages\EditMainAboutPage::route('/{record}/edit'),
        ];
    }

    protected static function langTab(string $label, string $locale)
    {
        return Forms\Components\Tabs\Tab::make($label)->schema([
            Forms\Components\TextInput::make("title_$locale")->label("Title ($label)"),
            Forms\Components\Textarea::make("subtitle_$locale")->label("Subtitle ($label)")->rows(2),
            Forms\Components\Textarea::make("intro_$locale")->label("Intro ($label)")->rows(4),
        ]);
    }
}
