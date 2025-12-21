<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SecuritySliderResource\Pages;
use App\Filament\Resources\SecuritySliderResource\RelationManagers;
use App\Models\SecuritySlider;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SecuritySliderResource extends Resource
{
    protected static ?string $model = SecuritySlider::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([

            Tabs::make('Languages')->tabs([
                Tabs\Tab::make('AZ')->schema([
                    TextInput::make('title_az')->label('Title (AZ)'),
                    Textarea::make('description_az')->label('Description (AZ)'),
                ]),

                Tabs\Tab::make('EN')->schema([
                    TextInput::make('title_en')->label('Title (EN)'),
                    Textarea::make('description_en')->label('Description (EN)'),
                ]),

                Tabs\Tab::make('ES')->schema([
                    TextInput::make('title_es')->label('Title (ES)'),
                    Textarea::make('description_es')->label('Description (ES)'),
                ]),

                Tabs\Tab::make('DE')->schema([
                    TextInput::make('title_de')->label('Title (DE)'),
                    Textarea::make('description_de')->label('Description (DE)'),
                ]),

                Tabs\Tab::make('FR')->schema([
                    TextInput::make('title_fr')->label('Title (FR)'),
                    Textarea::make('description_fr')->label('Description (FR)'),
                ]),

                Tabs\Tab::make('RU')->schema([
                    TextInput::make('title_ru')->label('Title (RU)'),
                    Textarea::make('description_ru')->label('Description (RU)'),
                ]),

                Tabs\Tab::make('ZH')->schema([
                    TextInput::make('title_zh')->label('Title (ZH)'),
                    Textarea::make('description_zh')->label('Description (ZH)'),
                ]),
            ]),

            FileUpload::make('image')
                ->directory('security-sliders')
                ->image(),
            Toggle::make('is_active')->default(true),

            TextInput::make('order')->numeric()->default(0),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\IconColumn::make('is_active')->boolean(),
                Tables\Columns\TextColumn::make('order'),
            ])
            ->defaultSort('order');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSecuritySliders::route('/'),
            'create' => Pages\CreateSecuritySlider::route('/create'),
            'edit' => Pages\EditSecuritySlider::route('/{record}/edit'),
        ];
    }
}
