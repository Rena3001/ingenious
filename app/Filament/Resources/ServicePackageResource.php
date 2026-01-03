<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServicePackageResource\Pages;
use App\Models\ServicePackage;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;

class ServicePackageResource extends Resource
{
    protected static ?string $model = ServicePackage::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';
    protected static ?string $navigationLabel = 'Service Packages';
    protected static ?string $navigationGroup = 'Technical Services';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([

            Forms\Components\Select::make('service_package_section_id')
                ->relationship('section', 'title_az')
                ->required(),

            Forms\Components\TextInput::make('package_key')
                ->helperText('basic / priority / premium')
                ->required(),

            Forms\Components\TextInput::make('price')
                ->numeric(),

            Forms\Components\TextInput::make('price_unit')
                ->default('hr'),

            Forms\Components\TextInput::make('icon')
                ->placeholder('icon-class'),

            Forms\Components\Toggle::make('is_featured')
                ->label('Highlight (Middle Card)'),

            Forms\Components\TextInput::make('sort_order')
                ->numeric()
                ->default(0),

            Forms\Components\Tabs::make('Content')
                ->tabs([
                    Forms\Components\Tabs\Tab::make('Title')
                        ->schema(self::langFields('title')),

                    Forms\Components\Tabs\Tab::make('Main Description (.1)')
                        ->schema(self::langFields('description_main','textarea')),

                    Forms\Components\Tabs\Tab::make('Detail Description (.2)')
                        ->schema(self::langFields('description_detail','textarea')),

                    Forms\Components\Tabs\Tab::make('Remote Note (.3)')
                        ->schema(self::langFields('remote_note','textarea')),
                ]),

            Forms\Components\Toggle::make('is_active')
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
                Tables\Columns\TextColumn::make('price')->label('Price'),
                Tables\Columns\IconColumn::make('is_featured')->boolean(),
                Tables\Columns\IconColumn::make('is_active')->boolean(),
            ])
            ->defaultSort('sort_order');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServicePackages::route('/'),
            'create' => Pages\CreateServicePackage::route('/create'),
            'edit' => Pages\EditServicePackage::route('/{record}/edit'),
        ];
    }
}
