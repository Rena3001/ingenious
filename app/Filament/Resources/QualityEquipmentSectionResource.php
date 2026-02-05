<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QualityEquipmentSectionResource\Pages;
use App\Models\QualityEquipmentSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;

class QualityEquipmentSectionResource extends Resource
{
    protected static ?string $model = QualityEquipmentSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-device-phone-mobile';
    protected static ?string $navigationLabel = 'Quality Equipment security overview';
    protected static ?string $navigationGroup = 'Security Overview';


    public static function form(Form $form): Form
    {
        return $form->schema([

            Select::make('product_id')
                ->relationship('product', 'name_az')
                ->required()
                ->searchable()
                ->preload()
                ->label('Məhsul'),

            Toggle::make('is_active')
                ->label('Aktiv')
                ->default(true),

            Tabs::make('Content')->tabs([

                /* 17 — TITLE */
                Tabs\Tab::make('Başlıq')->schema([
                    TextInput::make('title_az')->label('AZ'),
                    TextInput::make('title_en')->label('EN'),
                    TextInput::make('title_ru')->label('RU'),
                    TextInput::make('title_de')->label('DE'),
                    TextInput::make('title_fr')->label('FR'),
                    TextInput::make('title_es')->label('ES'),
                    TextInput::make('title_zh')->label('ZH'),
                ]),

                /* 17.1 — DESCRIPTION */
                Tabs\Tab::make('Açıqlama')->schema([
                    Textarea::make('description_az')->label('AZ'),
                    Textarea::make('description_en')->label('EN'),
                    Textarea::make('description_ru')->label('RU'),
                    Textarea::make('description_de')->label('DE'),
                    Textarea::make('description_fr')->label('FR'),
                    Textarea::make('description_es')->label('ES'),
                    Textarea::make('description_zh')->label('ZH'),
                ]),

                /* 18 — IMAGE */
                Tabs\Tab::make('Şəkil')->schema([
                    FileUpload::make('hero_image')
                        ->directory('quality-equipment')
                        ->image()
                        ->label('İri məhsul şəkli'),
                ]),

                /* 19 — CTA */
                Tabs\Tab::make('Button')->schema([
                    Select::make('cta_translation_key')
                        ->label('Button mətni (Translation)')
                        ->options([
                            'product_cta_view' => 'Məhsula Bax',
                            'product_cta_order' => 'Sifariş Et',
                        ])
                        ->default('product_cta_view')
                        ->required(),
                ]),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_az')
                    ->label('Başlıq')
                    ->limit(30),

                Tables\Columns\TextColumn::make('product.title')
                    ->label('Məhsul'),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Aktiv'),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQualityEquipmentSections::route('/'),
            'create' => Pages\CreateQualityEquipmentSection::route('/create'),
            'edit' => Pages\EditQualityEquipmentSection::route('/{record}/edit'),
        ];
    }
}
