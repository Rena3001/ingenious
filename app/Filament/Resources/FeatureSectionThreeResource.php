<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeatureSectionThreeResource\Pages;
use App\Models\FeatureSectionThree;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\{
    Section,
    TextInput,
    Textarea,
    FileUpload,
    Grid,
    Toggle
};

class FeatureSectionThreeResource extends Resource
{
    protected static ?string $model = FeatureSectionThree::class;

    protected static ?string $navigationIcon = 'heroicon-o-bolt';
    protected static ?string $navigationLabel = 'Features Section Three';
    protected static ?string $navigationGroup = 'Home Sections';
    protected static ?int $navigationSort = 40;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                /*
                |--------------------------------------------------------------------------
                | UPPER SECTION
                |--------------------------------------------------------------------------
                */
                Section::make('Upper Section')
                    ->schema([
                        FileUpload::make('upper_image')
                            ->label('Background Image')
                            ->directory('features/section-three')
                            ->image()
                            ->columnSpanFull(),

                        Grid::make(2)->schema([
                            TextInput::make('upper_title_az')->label('Title (AZ)'),
                            TextInput::make('upper_title_en')->label('Title (EN)'),
                            TextInput::make('upper_title_ru')->label('Title (RU)'),
                            TextInput::make('upper_title_de')->label('Title (DE)'),
                            TextInput::make('upper_title_fr')->label('Title (FR)'),
                            TextInput::make('upper_title_es')->label('Title (ES)'),
                            TextInput::make('upper_title_zh')->label('Title (ZH)'),

                            Textarea::make('upper_description_az')->label('Description (AZ)')->rows(4),
                            Textarea::make('upper_description_en')->label('Description (EN)')->rows(4),
                            Textarea::make('upper_description_ru')->label('Description (RU)')->rows(4),
                            Textarea::make('upper_description_de')->label('Description (DE)')->rows(4),
                            Textarea::make('upper_description_fr')->label('Description (FR)')->rows(4),
                            Textarea::make('upper_description_es')->label('Description (ES)')->rows(4),
                            Textarea::make('upper_description_zh')->label('Description (ZH)')->rows(4),
                        ]),
                    ])
                    ->collapsible(),

                /*
                |--------------------------------------------------------------------------
                | UPPER ICONS (STATIC 3)
                |--------------------------------------------------------------------------
                */
                Section::make('Upper Icons (3 items)')
                    ->schema([
                        Grid::make(3)->schema([

                            // ICON 1
                            Section::make('Icon 1')->schema([
                                TextInput::make('upper_icon_1_title_az')->label('Title AZ'),
                                TextInput::make('upper_icon_1_title_en')->label('Title EN'),
                                TextInput::make('upper_icon_1_title_ru')->label('Title RU'),
                                TextInput::make('upper_icon_1_title_de')->label('Title DE'),
                                TextInput::make('upper_icon_1_title_fr')->label('Title FR'),
                                TextInput::make('upper_icon_1_title_es')->label('Title ES'),
                                TextInput::make('upper_icon_1_title_zh')->label('Title ZH'),

                                Textarea::make('upper_icon_1_desc_az')->label('Desc AZ')->rows(3),
                                Textarea::make('upper_icon_1_desc_en')->label('Desc EN')->rows(3),
                                Textarea::make('upper_icon_1_desc_ru')->label('Desc RU')->rows(3),
                                Textarea::make('upper_icon_1_desc_de')->label('Desc DE')->rows(3),
                                Textarea::make('upper_icon_1_desc_fr')->label('Desc FR')->rows(3),
                                Textarea::make('upper_icon_1_desc_es')->label('Desc ES')->rows(3),
                                Textarea::make('upper_icon_1_desc_zh')->label('Desc ZH')->rows(3),
                            ]),

                            // ICON 2
                            Section::make('Icon 2')->schema([
                                TextInput::make('upper_icon_2_title_az')->label('Title AZ'),
                                TextInput::make('upper_icon_2_title_en')->label('Title EN'),
                                TextInput::make('upper_icon_2_title_ru')->label('Title RU'),
                                TextInput::make('upper_icon_2_title_de')->label('Title DE'),
                                TextInput::make('upper_icon_2_title_fr')->label('Title FR'),
                                TextInput::make('upper_icon_2_title_es')->label('Title ES'),
                                TextInput::make('upper_icon_2_title_zh')->label('Title ZH'),

                                Textarea::make('upper_icon_2_desc_az')->label('Desc AZ')->rows(3),
                                Textarea::make('upper_icon_2_desc_en')->label('Desc EN')->rows(3),
                                Textarea::make('upper_icon_2_desc_ru')->label('Desc RU')->rows(3),
                                Textarea::make('upper_icon_2_desc_de')->label('Desc DE')->rows(3),
                                Textarea::make('upper_icon_2_desc_fr')->label('Desc FR')->rows(3),
                                Textarea::make('upper_icon_2_desc_es')->label('Desc ES')->rows(3),
                                Textarea::make('upper_icon_2_desc_zh')->label('Desc ZH')->rows(3),
                            ]),

                            // ICON 3
                            Section::make('Icon 3')->schema([
                                TextInput::make('upper_icon_3_title_az')->label('Title AZ'),
                                TextInput::make('upper_icon_3_title_en')->label('Title EN'),
                                TextInput::make('upper_icon_3_title_ru')->label('Title RU'),
                                TextInput::make('upper_icon_3_title_de')->label('Title DE'),
                                TextInput::make('upper_icon_3_title_fr')->label('Title FR'),
                                TextInput::make('upper_icon_3_title_es')->label('Title ES'),
                                TextInput::make('upper_icon_3_title_zh')->label('Title ZH'),
                                Textarea::make('upper_icon_3_desc_az')->label('Desc AZ')->rows(3),
                                Textarea::make('upper_icon_3_desc_en')->label('Desc EN')->rows(3),
                                Textarea::make('upper_icon_3_desc_ru')->label('Desc RU')->rows(3),
                                Textarea::make('upper_icon_3_desc_de')->label('Desc DE')->rows(3),
                                Textarea::make('upper_icon_3_desc_fr')->label('Desc FR')->rows(3),
                                Textarea::make('upper_icon_3_desc_es')->label('Desc ES')->rows(3),
                                Textarea::make('upper_icon_3_desc_zh')->label('Desc ZH')->rows(3)
                            ]),
                        ]),
                    ])
                    ->collapsible(),

                /*
                |--------------------------------------------------------------------------
                | LOWER SECTION
                |--------------------------------------------------------------------------
                */
                Section::make('Lower Section')
                    ->schema([
                        FileUpload::make('lower_image')
                            ->label('Section Image')
                            ->directory('features/section-three')
                            ->image()
                            ->columnSpanFull(),

                        Grid::make(2)->schema([
                            TextInput::make('lower_title_az')->label('Title (AZ)'),
                            TextInput::make('lower_title_en')->label('Title (EN)'),
                            TextInput::make('lower_title_ru')->label('Title (RU)'),
                            TextInput::make('lower_title_de')->label('Title (DE)'),
                            TextInput::make('lower_title_fr')->label('Title (FR)'),
                            TextInput::make('lower_title_es')->label('Title (ES)'),
                            TextInput::make('lower_title_zh')->label('Title (ZH)'),

                            Textarea::make('lower_description_az')->label('Description (AZ)')->rows(4),
                            Textarea::make('lower_description_en')->label('Description (EN)')->rows(4),
                            Textarea::make('lower_description_ru')->label('Description (RU)')->rows(4),
                            Textarea::make('lower_description_de')->label('Description (DE)')->rows(4),
                            Textarea::make('lower_description_fr')->label('Description (FR)')->rows(4),
                            Textarea::make('lower_description_es')->label('Description (ES)')->rows(4)
                        ]),
                    ])
                    ->collapsible(),

                /*
                |--------------------------------------------------------------------------
                | LOWER ICONS (STATIC 4)
                |--------------------------------------------------------------------------
                */
                Section::make('Lower Icons (4 items)')
                    ->schema([
                        Grid::make(4)->schema([
                            TextInput::make('lower_icon_1')->label('Icon 1 (flaticon-*)'),
                            TextInput::make('lower_icon_2')->label('Icon 2 (flaticon-*)'),
                            TextInput::make('lower_icon_3')->label('Icon 3 (flaticon-*)'),
                            TextInput::make('lower_icon_4')->label('Icon 4 (flaticon-*)'),
                        ]),
                        Grid::make(4)->schema([
                            TextInput::make('lower_icon_1_url')->label('Icon 1 URL'),
                            TextInput::make('lower_icon_2_url')->label('Icon 2 URL'),
                            TextInput::make('lower_icon_3_url')->label('Icon 3 URL'),
                            TextInput::make('lower_icon_4_url')->label('Icon 4 URL'),
                        ]),
                    ])
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('upper_title_en')
                    ->label('Upper Title')
                    ->searchable(),

                Tables\Columns\TextColumn::make('lower_title_en')
                    ->label('Lower Title')
                    ->searchable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFeatureSectionThrees::route('/'),
            'create' => Pages\CreateFeatureSectionThree::route('/create'),
            'edit' => Pages\EditFeatureSectionThree::route('/{record}/edit'),
        ];
    }
}
