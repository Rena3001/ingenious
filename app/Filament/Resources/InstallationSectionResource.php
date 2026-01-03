<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InstallationSectionResource\Pages;
use App\Models\InstallationSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class InstallationSectionResource extends Resource
{
    protected static ?string $model = InstallationSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';
    protected static ?string $navigationLabel = 'Installation Section';
    protected static ?string $navigationGroup = 'Technical Services';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Tabs::make()
                    ->tabs([

                        /* =====================
                           TITLE — 70
                        ===================== */
                        Forms\Components\Tabs\Tab::make('Title')
                            ->schema([
                                Forms\Components\TextInput::make('title_az')->required(),
                                Forms\Components\TextInput::make('title_en'),
                                Forms\Components\TextInput::make('title_ru'),
                                Forms\Components\TextInput::make('title_de'),
                                Forms\Components\TextInput::make('title_es'),
                                Forms\Components\TextInput::make('title_fr'),
                                Forms\Components\TextInput::make('title_zh'),
                            ]),

                        /* =====================
                           DESCRIPTION — 70.1
                        ===================== */
                        Forms\Components\Tabs\Tab::make('Description')
                            ->schema([
                                Forms\Components\Textarea::make('description_az')->rows(4),
                                Forms\Components\Textarea::make('description_en')->rows(4),
                                Forms\Components\Textarea::make('description_ru')->rows(4),
                                Forms\Components\Textarea::make('description_de')->rows(4),
                                Forms\Components\Textarea::make('description_es')->rows(4),
                                Forms\Components\Textarea::make('description_fr')->rows(4),
                                Forms\Components\Textarea::make('description_zh')->rows(4),
                            ]),

                        /* =====================
                           CTA — 74
                        ===================== */
                        Forms\Components\Tabs\Tab::make('CTA')
                            ->schema([
                                Forms\Components\TextInput::make('cta_link')
                                    ->placeholder('#technical-support'),
                                Forms\Components\Toggle::make('is_active')
                                    ->default(true),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_az')->label('Title')->searchable(),
                Tables\Columns\ToggleColumn::make('is_active'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [
            InstallationSectionResource\RelationManagers\StepsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInstallationSections::route('/'),
            'edit'  => Pages\EditInstallationSection::route('/{record}/edit'),
        ];
    }
}
