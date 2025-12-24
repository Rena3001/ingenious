<?php

namespace App\Filament\Resources;

use App\Models\AppProductSection;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use App\Filament\Resources\AppProductSectionResource\Pages;

class AppProductSectionResource extends Resource
{
    protected static ?string $model = AppProductSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-device-phone-mobile';
    protected static ?string $navigationLabel = 'App Product Section';
    protected static ?string $navigationGroup = 'Site Content';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([

            Forms\Components\Section::make('Media & Background')
                ->schema([
                    Forms\Components\FileUpload::make('image')
                        ->label('Məhsul Fotosu')
                        ->image()
                        ->directory('products'),
                ])->columns(1),

            Forms\Components\Section::make('Icons (Class name)')
                ->schema([
                    Forms\Components\TextInput::make('icon_1')
                        ->label('Icon 1 class')
                        ->placeholder('flaticon-shield')
                        ->helperText('Məs: flaticon-shield'),

                    Forms\Components\TextInput::make('icon_2')
                        ->label('Icon 2 class')
                        ->placeholder('flaticon-lock'),

                    Forms\Components\TextInput::make('icon_3')
                        ->label('Icon 3 class')
                        ->placeholder('flaticon-security'),
                    Forms\Components\TextInput::make('button_link')
                        ->label('Button Link')
                        ->placeholder('https://example.com'),
                ])->columns(4),



            Forms\Components\Section::make('Translations')
                ->schema([
                    Forms\Components\Tabs::make('Languages')->tabs([
                        self::langTab('az', 'AZ'),
                        self::langTab('en', 'EN'),
                        self::langTab('es', 'ES'),
                        self::langTab('de', 'DE'),
                        self::langTab('fr', 'FR'),
                        self::langTab('ru', 'RU'),
                        self::langTab('zh', 'ZH'),
                    ]),
                ]),

            Forms\Components\Toggle::make('is_active')
                ->label('Aktiv'),
        ]);
    }

    protected static function langTab(string $lang, string $label)
    {
        return Forms\Components\Tabs\Tab::make($label)->schema([
            Forms\Components\TextInput::make("title_$lang")->label('Məhsul adı'),
            Forms\Components\Textarea::make("description_$lang")->rows(3)->label('Qısa izah'),

            Forms\Components\TextInput::make("icon_1_text_$lang")->label('Icon 1 mətni'),
            Forms\Components\TextInput::make("icon_2_text_$lang")->label('Icon 2 mətni'),
            Forms\Components\TextInput::make("icon_3_text_$lang")->label('Icon 3 mətni'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('image')->label('Foto'),
            Tables\Columns\TextColumn::make('title_az')->label('Başlıq (AZ)'),
            Tables\Columns\IconColumn::make('is_active')->boolean(),

        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAppProductSections::route('/'),
            'create' => Pages\CreateAppProductSection::route('/create'),
            'edit' => Pages\EditAppProductSection::route('/{record}/edit'),
        ];
    }
}
