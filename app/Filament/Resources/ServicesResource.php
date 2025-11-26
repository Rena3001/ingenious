<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServicesResource\Pages\CreateServices;
use App\Filament\Resources\ServicesResource\Pages\EditServices;
use App\Filament\Resources\ServicesResource\Pages\ListServices;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ServicesResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationLabel = 'Services';
    protected static ?string $navigationGroup = 'Website Content';
    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                /* -----------------------------------
                 * SECTION 1 — Iconlar + Başlıq + Açıqlama
                 * ----------------------------------- */

                Forms\Components\Section::make('Section 1 — Icons & Main Content')
                    ->schema([

                        // ICON REPEATER
                        Forms\Components\Repeater::make('icons')
                            ->label('İkonlar')
                            ->schema([
                                Forms\Components\TextInput::make('icon')
                                    ->label('Icon class (flaticon)')
                                    ->placeholder('flaticon-lamp-1')
                                    ->required(),

                                Forms\Components\TextInput::make('icon_title_az')->label('Icon Başlığı (AZ)'),
                                Forms\Components\TextInput::make('icon_title_en')->label('Icon Title (EN)'),
                                Forms\Components\TextInput::make('icon_title_ru')->label('Icon Title (RU)'),
                                // 🇩🇪
                                Forms\Components\TextInput::make('icon_title_de')->label('Icon Titel (DE)'),

                                // 🇪🇸
                                Forms\Components\TextInput::make('icon_title_es')->label('Icon Título (ES)'),
                            ])
                            ->default([])
                            ->reorderable()
                            ->columnSpanFull()
                            ->addActionLabel('Yeni icon əlavə et'),

                        // MAIN INFO
                        Forms\Components\Tabs::make('Languages')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('AZ')
                                    ->schema([
                                        Forms\Components\TextInput::make('title_az')
                                            ->label('Başlıq (AZ)')
                                            ->required(),

                                        Forms\Components\Textarea::make('description_az')
                                            ->label('Açıqlama (AZ)'),
                                    ]),
                                Forms\Components\Tabs\Tab::make('EN')
                                    ->schema([
                                        Forms\Components\TextInput::make('title_en')
                                            ->label('Title (EN)'),

                                        Forms\Components\Textarea::make('description_en')
                                            ->label('Description (EN)'),
                                    ]),
                                Forms\Components\Tabs\Tab::make('RU')
                                    ->schema([
                                        Forms\Components\TextInput::make('title_ru')
                                            ->label('Заголовок (RU)'),

                                        Forms\Components\Textarea::make('description_ru')
                                            ->label('Описание (RU)'),
                                    ]),
                                Forms\Components\Tabs\Tab::make('DE')
                                    ->schema([
                                        Forms\Components\TextInput::make('title_de')
                                            ->label('Titel (DE)'),

                                        Forms\Components\Textarea::make('description_de')
                                            ->label('Beschreibung (DE)'),
                                    ]),
                                Forms\Components\Tabs\Tab::make('ES')
                                    ->schema([
                                        Forms\Components\TextInput::make('title_es')
                                            ->label('Título (ES)'),
                                        Forms\Components\Textarea::make('description_es')
                                            ->label('Descripción (ES)'),
                                    ]),
                            ])
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),


                /* -----------------------------------
                 * SECTION 2 — Fluid Section One
                 * ----------------------------------- */

                Forms\Components\Section::make('Section 2 — Fluid Section One')
                    ->schema([

                        // Section 2 Title & Description
                        Forms\Components\Tabs::make('Section 2 Languages')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('AZ')
                                    ->schema([
                                        Forms\Components\TextInput::make('section2_title_az')
                                            ->label('Section 2 Başlıq (AZ)'),
                                        Forms\Components\Textarea::make('section2_description_az')
                                            ->label('Section 2 Açıqlama (AZ)'),
                                    ]),
                                Forms\Components\Tabs\Tab::make('EN')
                                    ->schema([
                                        Forms\Components\TextInput::make('section2_title_en')
                                            ->label('Section 2 Title (EN)'),
                                        Forms\Components\Textarea::make('section2_description_en')
                                            ->label('Section 2 Description (EN)'),
                                    ]),
                                Forms\Components\Tabs\Tab::make('RU')
                                    ->schema([
                                        Forms\Components\TextInput::make('section2_title_ru')
                                            ->label('Section 2 Заголовок (RU)'),
                                        Forms\Components\Textarea::make('section2_description_ru')
                                            ->label('Section 2 Описание (RU)'),
                                    ]),
                                // 🇩🇪
                                Forms\Components\Tabs\Tab::make('DE')
                                    ->schema([
                                        Forms\Components\TextInput::make('section2_title_de')->label('Section 2 Titel (DE)'),
                                        Forms\Components\Textarea::make('section2_description_de')->label('Section 2 Beschreibung (DE)'),
                                    ]),

                                // 🇪🇸
                                Forms\Components\Tabs\Tab::make('ES')
                                    ->schema([
                                        Forms\Components\TextInput::make('section2_title_es')->label('Section 2 Título (ES)'),
                                        Forms\Components\Textarea::make('section2_description_es')->label('Section 2 Descripción (ES)'),
                                    ]),

                            ])
                            ->columnSpanFull(),

                        // Section 2 List
                        Forms\Components\Repeater::make('section2_list')
                            ->label('Section 2 List maddələri')
                            ->schema([
                                Forms\Components\TextInput::make('text_az')->label('Mətni (AZ)')->required(),
                                Forms\Components\TextInput::make('text_en')->label('Text (EN)'),

                                // 🇩🇪
                                Forms\Components\TextInput::make('text_de')->label('Text (DE)'),

                                // 🇪🇸
                                Forms\Components\TextInput::make('text_es')->label('Texto (ES)'),

                                Forms\Components\Textarea::make('text_ru')
                                    ->label('Текст (RU)')
                                    ->rows(2)
                                    ->maxLength(null),
                            ])


                            ->default([])
                            ->reorderable()
                            ->columnSpanFull(),

                        // Section 2 Button Link
                        Forms\Components\TextInput::make('section2_button_link')
                            ->label('Button Link')
                            ->columnSpanFull(),

                        // Section 2 Button Text Tabs
                        Forms\Components\Tabs::make('Section 2 Button Text')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('AZ')->schema([
                                    Forms\Components\TextInput::make('section2_button_text_az')
                                        ->label('Button Mətni (AZ)'),
                                ]),
                                Forms\Components\Tabs\Tab::make('EN')->schema([
                                    Forms\Components\TextInput::make('section2_button_text_en')
                                        ->label('Button Text (EN)'),
                                ]),
                                Forms\Components\Tabs\Tab::make('RU')->schema([
                                    Forms\Components\TextInput::make('section2_button_text_ru')
                                        ->label('Текст кнопки (RU)'),
                                ]),

                                // 🇩🇪
                                Forms\Components\Tabs\Tab::make('DE')->schema([
                                    Forms\Components\TextInput::make('section2_button_text_de')
                                        ->label('Schaltflächentext (DE)'),
                                ]),

                                // 🇪🇸
                                Forms\Components\Tabs\Tab::make('ES')->schema([
                                    Forms\Components\TextInput::make('section2_button_text_es')
                                        ->label('Texto del botón (ES)'),
                                ]),
                            ])
                            ->columnSpanFull(),

                        // Section 2 Background Image
                        Forms\Components\FileUpload::make('section2_background')
                            ->label('Background şəkli')
                            ->image()
                            ->directory('services/section2')
                            ->columnSpanFull(),
                    ])
                    ->collapsed()
                    ->columnSpanFull(),


                /* -----------------------------------
                 * SORT ORDER
                 * ----------------------------------- */
                Forms\Components\TextInput::make('sort')
                    ->numeric()
                    ->default(0)
                    ->label('Sort Order')
                    ->columnSpanFull(),



                Forms\Components\Section::make('Section 3 — Skills Section')
                    ->schema([

                        // SECTION 3 TITLE & DESCRIPTION (3 dil)
                        Forms\Components\Tabs::make('Section 3 Languages')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('AZ')
                                    ->schema([
                                        Forms\Components\TextInput::make('section3_title_az')
                                            ->label('Section 3 Başlıq (AZ)'),
                                        Forms\Components\Textarea::make('section3_description_az')
                                            ->label('Section 3 Açıqlama (AZ)'),
                                    ]),
                                Forms\Components\Tabs\Tab::make('EN')
                                    ->schema([
                                        Forms\Components\TextInput::make('section3_title_en')
                                            ->label('Section 3 Title (EN)'),
                                        Forms\Components\Textarea::make('section3_description_en')
                                            ->label('Section 3 Description (EN)'),
                                    ]),
                                Forms\Components\Tabs\Tab::make('RU')
                                    ->schema([
                                        Forms\Components\TextInput::make('section3_title_ru')
                                            ->label('Section 3 Заголовок (RU)'),
                                        Forms\Components\Textarea::make('section3_description_ru')
                                            ->label('Section 3 Описание (RU)'),
                                    ]),
                                // 🇩🇪
                                Forms\Components\Tabs\Tab::make('DE')
                                    ->schema([
                                        Forms\Components\TextInput::make('section3_title_de')
                                            ->label('Section 3 Titel (DE)'),
                                        Forms\Components\Textarea::make('section3_description_de')
                                            ->label('Section 3 Beschreibung (DE)'),
                                    ]),
                                Forms\Components\Tabs\Tab::make('ES')
                                    ->schema([
                                        Forms\Components\TextInput::make('section3_title_es')
                                            ->label('Section 3 Título (ES)'),
                                        Forms\Components\Textarea::make('section3_description_es')
                                            ->label('Section 3 Descripción (ES)'),
                                    ]),

                            ])
                            ->columnSpanFull(),

                        // SECTION 3 SKILL ITEMS
                        Forms\Components\Repeater::make('section3_skills')
                            ->label('Skills List')
                            ->schema([
                                Forms\Components\TextInput::make('percent')
                                    ->label('Faiz (%)')
                                    ->numeric()
                                    ->minValue(0)
                                    ->maxValue(100)
                                    ->required(),

                                Forms\Components\TextInput::make('title_az')
                                    ->label('Başlıq (AZ)')
                                    ->required(),

                                Forms\Components\TextInput::make('title_en')
                                    ->label('Title (EN)'),

                                Forms\Components\TextInput::make('title_ru')
                                    ->label('Заголовок (RU)'),
                                // 🇩🇪
                                Forms\Components\TextInput::make('text_de')
                                    ->label('Text (DE)'),

                                // 🇪🇸
                                Forms\Components\TextInput::make('text_es')
                                    ->label('Texto (ES)'),
                            ])
                            ->default([])
                            ->reorderable()
                            ->columnSpanFull(),

                        // Background Image
                        Forms\Components\FileUpload::make('section3_background')
                            ->label('Background şəkli')
                            ->image()
                            ->directory('services/section3')
                            ->columnSpanFull(),

                    ])
                    ->collapsed()
                    ->columnSpanFull(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_az')->label('Başlıq (AZ)'),
                Tables\Columns\TextColumn::make('sort')->label('Sort')->sortable(),
            ])
            ->defaultSort('sort', 'asc')
            ->reorderable('sort');
    }

    public static function getPages(): array
    {
        return [
            'index' => ListServices::route('/'),
            'create' => CreateServices::route('/create'),
            'edit' => EditServices::route('/{record}/edit'),
        ];
    }
}
