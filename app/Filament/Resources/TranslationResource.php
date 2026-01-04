<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TranslationResource\Pages;
use App\Models\Translation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;
use Filament\Resources\Resource;
use Filament\Tables;

class TranslationResource extends Resource
{
    protected static ?string $model = Translation::class;
    protected static ?string $navigationIcon = 'heroicon-o-language';
    protected static ?string $navigationLabel = 'Tərcümələr';
    protected static ?string $pluralLabel = 'Tərcümələr';
    protected static ?string $navigationGroup = 'Sayt idarəetməsi';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('key')
                ->label('Açar (məs: buttons.read_more)')
                ->unique(ignoreRecord: true)
                ->required(),

            Tabs::make('LangTabs')->tabs([
                Tabs\Tab::make('AZ')->schema([
                    Forms\Components\TextInput::make('value_az')->label('Mətn (AZ)')->required(),
                ]),
                Tabs\Tab::make('EN')->schema([
                    Forms\Components\TextInput::make('value_en')->label('Text (EN)'),
                ]),
                Tabs\Tab::make('RU')->schema([
                    Forms\Components\TextInput::make('value_ru')->label('Текст (RU)'),
                ]),
                // 🇩🇪 DE
                Tabs\Tab::make('DE')->schema([
                    Forms\Components\TextInput::make('value_de')->label('Text (DE)'),
                ]),

                // 🇪🇸 ES
                Tabs\Tab::make('ES')->schema([
                    Forms\Components\TextInput::make('value_es')->label('Texto (ES)'),
                ]),
                // 🇫🇷 FRENCH
                Tabs\Tab::make('FR')->schema([
                    Forms\Components\TextInput::make('value_fr')
                        ->label('Texte (FR)'),
                ]),

                // 🇨🇳 CHINESE
                Tabs\Tab::make('ZH')->schema([
                    Forms\Components\TextInput::make('value_zh')
                        ->label('文本 (ZH)'),
                ]),
            ])->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('key')->label('Açar'),
                Tables\Columns\TextColumn::make('value_az')->label('AZ'),
                Tables\Columns\TextColumn::make('value_en')->label('EN'),
                Tables\Columns\TextColumn::make('value_ru')->label('RU'),
                Tables\Columns\TextColumn::make('value_de')->label('DE'),
                Tables\Columns\TextColumn::make('value_es')->label('ES'),

            ])
            ->searchable()
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTranslations::route('/'),
            'create' => Pages\CreateTranslation::route('/create'),
            'edit' => Pages\EditTranslation::route('/{record}/edit'),
        ];
    }
}
