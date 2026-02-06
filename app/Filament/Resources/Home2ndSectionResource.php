<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Home2ndSectionResource\Pages;
use App\Models\Home2ndSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class Home2ndSectionResource extends Resource
{
    protected static ?string $model = Home2ndSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Sayt idarəetməsi';
    protected static ?string $navigationLabel = 'Home 2nd Section';
    protected static ?string $modelLabel = 'Home 2nd Section';
    protected static ?string $pluralModelLabel = 'Home 2nd Section';

    public static function form(Form $form): Form
    {
        return $form->schema([

            Forms\Components\FileUpload::make('background_image')
                ->label('Background Image')
                ->disk('public')
                ->directory('home/second-section')
                ->image()
                ->imageEditor()
                ->required(),

            Forms\Components\Toggle::make('is_active')
                ->label('Active')
                ->default(true),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('background_image')
                    ->disk('public')
                    ->label('Background')
                    ->square(),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),
            ])
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
            'index'  => Pages\ListHome2ndSections::route('/'),
            'create' => Pages\CreateHome2ndSection::route('/create'),
            'edit'   => Pages\EditHome2ndSection::route('/{record}/edit'),
        ];
    }
}
