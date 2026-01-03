<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WarrantyFeatureSectionResource\Pages;
use App\Models\WarrantyFeatureSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class WarrantyFeatureSectionResource extends Resource
{
    protected static ?string $model = WarrantyFeatureSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';
    protected static ?string $navigationLabel = 'Warranty Feature Section';
    protected static ?string $navigationGroup = 'Warranty and Services';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                /* =============================
                   BACKGROUND IMAGE
                ============================== */
                Forms\Components\FileUpload::make('background_image')
                    ->label('Background Image')
                    ->directory('warranty/features')
                    ->image()
                    ->imagePreviewHeight('200')
                    ->columnSpanFull(),

                /* =============================
                   SECTION TITLE & DESCRIPTION
                ============================== */
                Forms\Components\Section::make('Section Content')
                    ->schema([

                        Forms\Components\Tabs::make('Languages')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('AZ')->schema([
                                    Forms\Components\TextInput::make('title_az')->label('Title (AZ)'),
                                    Forms\Components\Textarea::make('description_az')->label('Description (AZ)'),
                                ]),
                                Forms\Components\Tabs\Tab::make('EN')->schema([
                                    Forms\Components\TextInput::make('title_en')->label('Title (EN)'),
                                    Forms\Components\Textarea::make('description_en')->label('Description (EN)'),
                                ]),
                                Forms\Components\Tabs\Tab::make('RU')->schema([
                                    Forms\Components\TextInput::make('title_ru')->label('Title (RU)'),
                                    Forms\Components\Textarea::make('description_ru')->label('Description (RU)'),
                                ]),
                                Forms\Components\Tabs\Tab::make('DE')->schema([
                                    Forms\Components\TextInput::make('title_de')->label('Title (DE)'),
                                    Forms\Components\Textarea::make('description_de')->label('Description (DE)'),
                                ]),
                                Forms\Components\Tabs\Tab::make('FR')->schema([
                                    Forms\Components\TextInput::make('title_fr')->label('Title (FR)'),
                                    Forms\Components\Textarea::make('description_fr')->label('Description (FR)'),
                                ]),
                                Forms\Components\Tabs\Tab::make('ES')->schema([
                                    Forms\Components\TextInput::make('title_es')->label('Title (ES)'),
                                    Forms\Components\Textarea::make('description_es')->label('Description (ES)'),
                                ]),
                                Forms\Components\Tabs\Tab::make('ZH')->schema([
                                    Forms\Components\TextInput::make('title_zh')->label('Title (ZH)'),
                                    Forms\Components\Textarea::make('description_zh')->label('Description (ZH)'),
                                ]),
                            ]),
                    ])
                    ->columnSpanFull(),

                /* =============================
                   FEATURE ITEMS (14–17)
                ============================== */
                Forms\Components\Section::make('Feature Items')
                    ->schema([
                        Forms\Components\Repeater::make('items')
                            ->relationship()
                            ->schema([

                                Forms\Components\TextInput::make('icon')
                                    ->label('Icon class (fa fa-*)')
                                    ->placeholder('fa fa-video'),

                                Forms\Components\Tabs::make('Item Languages')
                                    ->tabs([
                                        Forms\Components\Tabs\Tab::make('AZ')->schema([
                                            Forms\Components\TextInput::make('title_az')->label('Title (AZ)'),
                                            Forms\Components\Textarea::make('text_az')->label('Text (AZ)'),
                                        ]),
                                        Forms\Components\Tabs\Tab::make('EN')->schema([
                                            Forms\Components\TextInput::make('title_en')->label('Title (EN)'),
                                            Forms\Components\Textarea::make('text_en')->label('Text (EN)'),
                                        ]),
                                        Forms\Components\Tabs\Tab::make('RU')->schema([
                                            Forms\Components\TextInput::make('title_ru')->label('Title (RU)'),
                                            Forms\Components\Textarea::make('text_ru')->label('Text (RU)'),
                                        ]),
                                        Forms\Components\Tabs\Tab::make('DE')->schema([
                                            Forms\Components\TextInput::make('title_de')->label('Title (DE)'),
                                            Forms\Components\Textarea::make('text_de')->label('Text (DE)'),
                                        ]),
                                        Forms\Components\Tabs\Tab::make('FR')->schema([
                                            Forms\Components\TextInput::make('title_fr')->label('Title (FR)'),
                                            Forms\Components\Textarea::make('text_fr')->label('Text (FR)'),
                                        ]),
                                        Forms\Components\Tabs\Tab::make('ES')->schema([
                                            Forms\Components\TextInput::make('title_es')->label('Title (ES)'),
                                            Forms\Components\Textarea::make('text_es')->label('Text (ES)'),
                                        ]),
                                        Forms\Components\Tabs\Tab::make('ZH')->schema([
                                            Forms\Components\TextInput::make('title_zh')->label('Title (ZH)'),
                                            Forms\Components\Textarea::make('text_zh')->label('Text (ZH)'),
                                        ]),
                                    ]),

                                Forms\Components\TextInput::make('sort_order')
                                    ->numeric()
                                    ->default(0),

                                Forms\Components\Toggle::make('is_active')
                                    ->label('Active')
                                    ->default(true),
                            ])
                            ->orderable('sort_order')
                            ->defaultItems(4)
                            ->columnSpanFull(),
                    ]),

                /* =============================
                   CTA & STATUS
                ============================== */
                Forms\Components\Section::make('Settings')
                    ->schema([
                        Forms\Components\TextInput::make('button_link')
                            ->label('CTA Link')
                            ->placeholder('/technical-services'),

                        Forms\Components\Toggle::make('is_active')
                            ->label('Section Active')
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
                    ->label('Background')
                    ->square(),

                Tables\Columns\TextColumn::make('title_en')
                    ->label('Title (EN)')
                    ->searchable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListWarrantyFeatureSections::route('/'),
            'create' => Pages\CreateWarrantyFeatureSection::route('/create'),
            'edit'   => Pages\EditWarrantyFeatureSection::route('/{record}/edit'),
        ];
    }
}
