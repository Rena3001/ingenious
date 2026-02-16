<?php

namespace App\Filament\Resources;

use App\Models\ProductShowcase;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use App\Filament\Resources\ProductShowcaseResource\Pages;

class ProductShowcaseResource extends Resource
{
    protected static ?string $model = ProductShowcase::class;

    protected static ?string $navigationIcon = 'heroicon-o-lock-closed';
    protected static ?string $navigationLabel = 'Məhsul Blokları';
    protected static ?string $pluralLabel = 'Məhsul Blokları';
    protected static ?string $navigationGroup = 'Security Overview';


    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([

            Forms\Components\Section::make('Ümumi')
                ->schema([
                    Forms\Components\FileUpload::make('image')
                        ->label('Məhsul Fotosu')
                        ->image()
                        ->directory('products')
                        ->imagePreviewHeight('200'),

                    Forms\Components\Toggle::make('is_active')
                        ->label('Aktiv / Deaktiv'),
                ])->columns(2),

            Forms\Components\Section::make('Mətnlər (7 Dil)')
                ->schema([
                    Forms\Components\Tabs::make('Languages')
                        ->tabs([
                            self::langTab('az', 'Azərbaycan'),
                            self::langTab('en', 'English'),
                            self::langTab('ru', 'Русский'),
                            self::langTab('de', 'Deutsch'),
                            self::langTab('fr', 'Français'),
                            self::langTab('es', 'Español'),
                            self::langTab('zh', '中文'),
                        ]),
                ]),
            Forms\Components\Section::make('İkonlar')
                ->schema([

                    Forms\Components\TextInput::make('icon_1')
                        ->label('İkon 1')
                        ->placeholder('flaticon-shield / fa fa-lock'),

                    Forms\Components\TextInput::make('icon_2')
                        ->label('İkon 2')
                        ->placeholder('flaticon-user / fa fa-key'),

                    Forms\Components\TextInput::make('icon_3')
                        ->label('İkon 3')
                        ->placeholder('flaticon-security / fa fa-cog'),

                ])
                ->columns(3),

            Forms\Components\Section::make('Button')
                ->schema([
                    Forms\Components\TextInput::make('button_link')
                        ->label('Button Link (məhsul səhifəsi)')
                        ->url(),
                ]),
        ]);
    }

    protected static function langTab(string $lang, string $label)
    {
        return Forms\Components\Tabs\Tab::make($label)->schema([
            Forms\Components\TextInput::make("title_$lang")
                ->label('Məhsul adı')
                ->required($lang === 'az'),

            Forms\Components\Textarea::make("description_$lang")
                ->label('Qısa izah')
                ->rows(3),

            Forms\Components\TextInput::make("icon_1_text_$lang")
                ->label('İkon 1 mətni'),

            Forms\Components\TextInput::make("icon_2_text_$lang")
                ->label('İkon 2 mətni'),

            Forms\Components\TextInput::make("icon_3_text_$lang")
                ->label('İkon 3 mətni'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->label('Foto'),
                Tables\Columns\TextColumn::make('title_az')->label('Məhsul adı (AZ)')->searchable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Aktiv'),
            ])
            ->defaultSort('id', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProductShowcases::route('/'),
            'create' => Pages\CreateProductShowcase::route('/create'),
            'edit' => Pages\EditProductShowcase::route('/{record}/edit'),
        ];
    }
}
