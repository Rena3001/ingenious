<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WarrantyMainSliderResource\Pages;
use App\Models\WarrantyMainSlider;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class WarrantyMainSliderResource extends Resource
{
    protected static ?string $model = WarrantyMainSlider::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Warranty Main Slider';
    protected static ?string $navigationGroup = 'Warranty and Services';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                /* =========================
                   IMAGES
                ========================= */
                Forms\Components\FileUpload::make('background_image')
                    ->label('Background Image')
                    ->directory('warranty/sliders')
                    ->image()
                    ->imagePreviewHeight('200')
                    ->columnSpanFull(),

                /* =========================
                   TITLES (7 LANG)
                ========================= */
                Forms\Components\Section::make('Titles')
                    ->schema([
                        Forms\Components\TextInput::make('title_az')->label('Title (AZ)'),
                        Forms\Components\TextInput::make('title_en')->label('Title (EN)'),
                        Forms\Components\TextInput::make('title_ru')->label('Title (RU)'),
                        Forms\Components\TextInput::make('title_de')->label('Title (DE)'),
                        Forms\Components\TextInput::make('title_fr')->label('Title (FR)'),
                        Forms\Components\TextInput::make('title_es')->label('Title (ES)'),
                        Forms\Components\TextInput::make('title_zh')->label('Title (ZH)'),
                    ])
                    ->columns(2),

                /* =========================
                   SUBTITLES (7 LANG)
                ========================= */
                Forms\Components\Section::make('Subtitles')
                    ->schema([
                        Forms\Components\TextInput::make('subtitle_az')->label('Subtitle (AZ)'),
                        Forms\Components\TextInput::make('subtitle_en')->label('Subtitle (EN)'),
                        Forms\Components\TextInput::make('subtitle_ru')->label('Subtitle (RU)'),
                        Forms\Components\TextInput::make('subtitle_de')->label('Subtitle (DE)'),
                        Forms\Components\TextInput::make('subtitle_fr')->label('Subtitle (FR)'),
                        Forms\Components\TextInput::make('subtitle_es')->label('Subtitle (ES)'),
                        Forms\Components\TextInput::make('subtitle_zh')->label('Subtitle (ZH)'),
                    ])
                    ->columns(2),

                /* =========================
                   BUTTON & SETTINGS
                ========================= */
                Forms\Components\Section::make('Settings')
                    ->schema([
                        Forms\Components\TextInput::make('button_link')
                            ->label('Button Link')
                            ->url(),

                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),

                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('background_image')
                    ->label('Image')
                    ->square(),

                Tables\Columns\TextColumn::make('title_en')
                    ->label('Title (EN)')
                    ->searchable(),

                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),
            ])
            ->defaultSort('sort_order')
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListWarrantyMainSliders::route('/'),
            'create' => Pages\CreateWarrantyMainSlider::route('/create'),
            'edit'   => Pages\EditWarrantyMainSlider::route('/{record}/edit'),
        ];
    }
}
