<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingsResource\Pages;
use App\Models\Setting;
use Filament\Resources\Resource;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;

class SettingsResource extends Resource
{
    protected static ?string $model = Setting::class;
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationLabel = 'Settings';
    protected static ?string $navigationGroup = 'System';

    public static function form(Form $form): Form
    {
        return $form->schema([

            Forms\Components\Section::make('Contact Information')
                ->schema([
                    Forms\Components\TextInput::make('phone'),
                    Forms\Components\TextInput::make('email'),
                    Forms\Components\TextInput::make('address'),
                    Forms\Components\Textarea::make('map_iframe'),
                ]),

            Forms\Components\Section::make('Contact Page Translations')
                ->schema([
                    Forms\Components\TextInput::make('contact_title_az')->label('Title (AZ)'),
                    Forms\Components\TextInput::make('contact_title_en')->label('Title (EN)'),
                    Forms\Components\TextInput::make('contact_title_ru')->label('Title (RU)'),
                    // 🇩🇪 DE
                    Forms\Components\TextInput::make('contact_title_de')->label('Title (DE)'),

                    // 🇪🇸 ES
                    Forms\Components\TextInput::make('contact_title_es')->label('Title (ES)'),


                    Forms\Components\Textarea::make('contact_desc_az')->label('Description (AZ)'),
                    Forms\Components\Textarea::make('contact_desc_en')->label('Description (EN)'),
                    Forms\Components\Textarea::make('contact_desc_ru')->label('Description (RU)'),
                    Forms\Components\Textarea::make('contact_desc_de')->label('Description (DE)'),

                    // 🇪🇸 ES
                    Forms\Components\Textarea::make('contact_desc_es')->label('Description (ES)'),
                ]),
            Forms\Components\FileUpload::make('logo')
                ->label('Logo (Dark)')
                ->directory('settings')
                ->image(),

            Forms\Components\FileUpload::make('logo_white')
                ->label('Logo (White)')
                ->directory('settings')
                ->image(),
            Forms\Components\Section::make('Social Media Links')
                ->schema([
                    Forms\Components\TextInput::make('facebook')->label('Facebook URL'),
                    Forms\Components\TextInput::make('instagram')->label('Instagram URL'),
                    Forms\Components\TextInput::make('linkedin')->label('LinkedIn URL'),
                    Forms\Components\TextInput::make('twitter')->label('Twitter URL'),
                    Forms\Components\TextInput::make('telegram')->label('Telegram URL'),
                ]),



        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('email'),
            Tables\Columns\TextColumn::make('phone'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSettings::route('/create'),
            'edit' => Pages\EditSettings::route('/{record}/edit'),
        ];
    }
}
