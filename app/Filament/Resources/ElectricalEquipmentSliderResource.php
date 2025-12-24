<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ElectricalEquipmentSliderResource\Pages;
use App\Filament\Resources\ElectricalEquipmentSliderResource\RelationManagers;
use App\Models\ElectricalEquipmentSlider;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ElectricalEquipmentSliderResource extends Resource
{
    protected static ?string $model = ElectricalEquipmentSlider::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([

            Forms\Components\Section::make('Images')
                ->columns(2)
                ->schema([
                    Forms\Components\FileUpload::make('background_image')
                        ->label('Background Image')
                        ->directory('sliders')
                        ->image(),

                    Forms\Components\FileUpload::make('content_image')
                        ->label('Content Image')
                        ->directory('sliders')
                        ->image(),
                ]),

            Forms\Components\Section::make('Content')
                ->schema([
                    Forms\Components\Tabs::make('Languages')->tabs([
                        self::langTab('az'),
                        self::langTab('en'),
                        self::langTab('ru'),
                        self::langTab('de'),
                        self::langTab('fr'),
                        self::langTab('es'),
                        self::langTab('zh'),
                    ]),
                ]),

            Forms\Components\Section::make('Button')
                ->schema([
                    Forms\Components\TextInput::make('button_link')
                        ->label('Button Link')
                        ->url(),
                ]),

            Forms\Components\TextInput::make('sort_order')
                ->numeric()
                ->default(0),

            Forms\Components\Toggle::make('is_active')->default(true),
        ]);
    }

    protected static function langTab(string $lang)
    {
        return Forms\Components\Tabs\Tab::make(strtoupper($lang))->schema([
            Forms\Components\TextInput::make("title_$lang")->label('Title'),
            Forms\Components\Textarea::make("description_$lang")->label('Description')->rows(3),
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
            'index' => Pages\ListElectricalEquipmentSliders::route('/'),
            'create' => Pages\CreateElectricalEquipmentSlider::route('/create'),
            'edit' => Pages\EditElectricalEquipmentSlider::route('/{record}/edit'),
        ];
    }
}
