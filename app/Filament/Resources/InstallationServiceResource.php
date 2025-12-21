<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InstallationServiceResource\RelationManagers\IconsRelationManager;
use App\Filament\Resources\InstallationServiceResource\Pages;
use App\Models\InstallationService;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;

class InstallationServiceResource extends Resource
{
    protected static ?string $model = InstallationService::class;
    protected static ?string $navigationGroup = 'Website Content';
    protected static ?string $navigationLabel = 'Installation Service';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Toggle::make('is_active')->default(true),

            FileUpload::make('background_image')
                ->directory('installation-service')
                ->image()
                ->label('Background (20)'),

            Tabs::make('Content')->tabs([

                Tabs\Tab::make('Title (20.1)')->schema([
                    TextInput::make('title_az')->label('AZ'),
                    TextInput::make('title_en')->label('EN'),
                    TextInput::make('title_ru')->label('RU'),
                    TextInput::make('title_de')->label('DE'),
                    TextInput::make('title_fr')->label('FR'),
                    TextInput::make('title_es')->label('ES'),
                    TextInput::make('title_zh')->label('ZH'),
                ]),

                Tabs\Tab::make('Description (20.2)')->schema([
                    Textarea::make('description_az')->label('AZ'),
                    Textarea::make('description_en')->label('EN'),
                    Textarea::make('description_ru')->label('RU'),
                    Textarea::make('description_de')->label('DE'),
                    Textarea::make('description_fr')->label('FR'),
                    Textarea::make('description_es')->label('ES'),
                    Textarea::make('description_zh')->label('ZH'),
                ]),

                Tabs\Tab::make('CTA (20.4)')->schema([
                    TextInput::make('cta_link')
                        ->label('Button link'),
                ]),
            ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_az')->label('Title'),
                Tables\Columns\IconColumn::make('is_active')->boolean(),
            ])
            ->actions([Tables\Actions\EditAction::make()]);
    }

    public static function getRelations(): array
    {
        return [
            IconsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInstallationServices::route('/'),
            'edit' => Pages\EditInstallationService::route('/{record}/edit'),
            'create' => Pages\CreateInstallationService::route('/create'),
        ];
    }
}
