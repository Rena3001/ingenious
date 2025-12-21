<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SecurityFeatureResource\Pages;
use App\Filament\Resources\SecurityFeatureResource\RelationManagers;
use App\Models\SecurityFeature;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SecurityFeatureResource extends Resource
{
    protected static ?string $model = SecurityFeature::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
{
    return $form->schema([

        Forms\Components\TextInput::make('icon')
            ->required()
            ->helperText('lock, camera, safe, access'),

        Forms\Components\Section::make('Başlıqlar')
            ->schema([
                Forms\Components\TextInput::make('title_az')->label('AZ')->required(),
                Forms\Components\TextInput::make('title_en')->label('EN'),
                Forms\Components\TextInput::make('title_es')->label('ES'),
                Forms\Components\TextInput::make('title_de')->label('DE'),
                Forms\Components\TextInput::make('title_fr')->label('FR'),
                Forms\Components\TextInput::make('title_ru')->label('RU'),
                Forms\Components\TextInput::make('title_zh')->label('ZH'),
            ])->columns(2),

        Forms\Components\Section::make('Açıqlamalar (1 cümlə)')
            ->schema([
                Forms\Components\Textarea::make('description_az')->label('AZ')->required()->rows(2),
                Forms\Components\Textarea::make('description_en')->label('EN')->rows(2),
                Forms\Components\Textarea::make('description_es')->label('ES')->rows(2),
                Forms\Components\Textarea::make('description_de')->label('DE')->rows(2),
                Forms\Components\Textarea::make('description_fr')->label('FR')->rows(2),
                Forms\Components\Textarea::make('description_ru')->label('RU')->rows(2),
                Forms\Components\Textarea::make('description_zh')->label('ZH')->rows(2),
            ])->columns(2),

        Forms\Components\TextInput::make('order')->numeric()->default(0),
        Forms\Components\Toggle::make('is_active')->default(true),
    ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListSecurityFeatures::route('/'),
            'create' => Pages\CreateSecurityFeature::route('/create'),
            'edit' => Pages\EditSecurityFeature::route('/{record}/edit'),
        ];
    }
}
