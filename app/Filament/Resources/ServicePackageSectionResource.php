<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServicePackageSectionResource\Pages;
use App\Models\ServicePackageSection;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;

class ServicePackageSectionResource extends Resource
{
    protected static ?string $model = ServicePackageSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Service Package Section';
    protected static ?string $navigationGroup = 'Technical Services';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([

            Forms\Components\Tabs::make('Content')
                ->tabs([
                    Forms\Components\Tabs\Tab::make('Title (76)')
                        ->schema(self::langFields('title')),

                    Forms\Components\Tabs\Tab::make('Subtitle (76.1)')
                        ->schema(self::langFields('subtitle', 'textarea')),

                    Forms\Components\Tabs\Tab::make('Main Note (76.2–76.3)')
                        ->schema(self::langFields('note', 'textarea')),

                    Forms\Components\Tabs\Tab::make('Remote Note (76.5)')
                        ->schema(self::langFields('remote_note', 'textarea')),
                ]),

            Forms\Components\Toggle::make('is_active')
                ->label('Active')
                ->default(true),
        ]);
    }

    private static function langFields(string $field, string $type = 'text'): array
    {
        $languages = ['az','en','ru','de','es','fr','zh'];
        return array_map(function ($lang) use ($field, $type) {
            return $type === 'textarea'
                ? Forms\Components\Textarea::make("{$field}_{$lang}")
                    ->label(strtoupper($lang))
                    ->rows(3)
                : Forms\Components\TextInput::make("{$field}_{$lang}")
                    ->label(strtoupper($lang));
        }, $languages);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_az')->label('Title'),
                Tables\Columns\IconColumn::make('is_active')->boolean(),
            ])
            ->defaultSort('id', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServicePackageSections::route('/'),
            'create' => Pages\CreateServicePackageSection::route('/create'),
            'edit' => Pages\EditServicePackageSection::route('/{record}/edit'),
        ];
    }
}
