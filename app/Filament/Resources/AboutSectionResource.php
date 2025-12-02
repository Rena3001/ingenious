<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutSectionResource\Pages;
use App\Models\AboutSection;
use App\Models\Translation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Repeater;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AboutSectionResource extends Resource
{
    protected static ?string $model = AboutSection::class;
    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationLabel = 'Haqqımızda Bölmələri';
    protected static ?string $pluralLabel = 'Haqqımızda Bölmələri';
    protected static ?string $navigationGroup = 'Sayt idarəetməsi';

    public static function form(Form $form): Form
    {
        return $form->schema([

            // 🔥 Bölmə növü
            Forms\Components\Select::make('type')
                ->label('Bölmə növü')
                ->options([
                    'home_about'         => 'Home About Section',
                    'about_section_three' => 'About Section Three',
                    'our_standards'       => 'Our Standards',
                    'our_mission'         => 'Our Mission',
                ])
                ->required()
                ->reactive(),

            // 🔥 Dillər üzrə mətn
            Tabs::make('LangTabs')->tabs([

                // ================= AZERBAIJANI =================
                Tabs\Tab::make('AZ')->schema([

                    Forms\Components\TextInput::make('title_az')
                        ->label('Başlıq (AZ)')
                        ->default(fn($get) =>
                            in_array($get('type'), ['about_section_three', 'home_about'])
                                ? 'Haqqımızda'
                                : null
                        ),

                    Forms\Components\RichEditor::make('content_az')
                        ->label('Mətn (AZ)')
                        ->visible(fn($get) => $get('type') !== 'home_about'),

                    Forms\Components\Textarea::make('short_desc_az')->label('Qısa təsvir (AZ)'),
                ]),

                // ================= ENGLISH =================
                Tabs\Tab::make('EN')->schema([
                    Forms\Components\TextInput::make('title_en')
                        ->label('Title (EN)')
                        ->default(fn($get) =>
                            in_array($get('type'), ['about_section_three', 'home_about'])
                                ? 'About Us'
                                : null
                        ),

                    Forms\Components\RichEditor::make('content_en')
                        ->label('Text (EN)')
                        ->visible(fn($get) => $get('type') !== 'home_about'),

                    Forms\Components\Textarea::make('short_desc_en')->label('Short desc (EN)'),
                ]),

                // ================= RUSSIAN =================
                Tabs\Tab::make('RU')->schema([
                    Forms\Components\TextInput::make('title_ru')
                        ->label('Заголовок (RU)')
                        ->default(fn($get) =>
                            in_array($get('type'), ['about_section_three', 'home_about'])
                                ? 'О Нас'
                                : null
                        ),

                    Forms\Components\RichEditor::make('content_ru')
                        ->label('Текст (RU)')
                        ->visible(fn($get) => $get('type') !== 'home_about'),

                    Forms\Components\Textarea::make('short_desc_ru')->label('Краткое описание (RU)'),
                ]),

                // ================= GERMAN =================
                Tabs\Tab::make('DE')->schema([
                    Forms\Components\TextInput::make('title_de')
                        ->label('Titel (DE)')
                        ->default(fn($get) =>
                            in_array($get('type'), ['about_section_three', 'home_about'])
                                ? 'Über Uns'
                                : null
                        ),

                    Forms\Components\RichEditor::make('content_de')
                        ->label('Text (DE)')
                        ->visible(fn($get) => $get('type') !== 'home_about'),

                    Forms\Components\Textarea::make('short_desc_de')->label('Kurzbeschreibung (DE)'),
                ]),

                // ================= SPANISH =================
                Tabs\Tab::make('ES')->schema([
                    Forms\Components\TextInput::make('title_es')
                        ->label('Título (ES)')
                        ->default(fn($get) =>
                            in_array($get('type'), ['about_section_three', 'home_about'])
                                ? 'Sobre Nosotros'
                                : null
                        ),

                    Forms\Components\RichEditor::make('content_es')
                        ->label('Texto (ES)')
                        ->visible(fn($get) => $get('type') !== 'home_about'),

                    Forms\Components\Textarea::make('short_desc_es')->label('Descripción corta (ES)'),
                ]),

            ])->columnSpanFull(),

            // 🔥 Button tərcüməsi yalnız home_about + about_section_three üçün
            Forms\Components\Select::make('button_key')
                ->label('Düymə tərcümə açarı')
                ->options(Translation::pluck('key', 'key')->toArray())
                ->visible(fn($get) =>
                    in_array($get('type'), ['about_section_three', 'home_about'])
                ),

            // 🔥 Background image — home_about + about_section_three + standards
            Forms\Components\FileUpload::make('background_image')
                ->label('Arxa fon şəkli')
                ->directory('about')
                ->image()
                ->columnSpanFull()
                ->visible(fn($get) =>
                    in_array($get('type'), ['home_about', 'about_section_three', 'our_standards'])
                ),

            // 🔥 home_about və about_section_three üçün feature icon-lar
            Repeater::make('missionItems')
                ->relationship('missionItems')
                ->label('Alt bloklar')
                ->visible(fn($get) =>
                    in_array($get('type'), ['home_about', 'our_standards'])
                )
                ->schema([
                    Forms\Components\TextInput::make('icon')
                        ->label('İkon class və ya SVG')
                        ->required(),

                    Tabs::make('MissionLangTabs')->tabs([
                        Tabs\Tab::make('AZ')->schema([
                            Forms\Components\TextInput::make('title_az')->label('Başlıq (AZ)'),
                        ]),
                        Tabs\Tab::make('EN')->schema([
                            Forms\Components\TextInput::make('title_en')->label('Title (EN)'),
                        ]),
                        Tabs\Tab::make('RU')->schema([
                            Forms\Components\TextInput::make('title_ru')->label('Заголовок (RU)'),
                        ]),
                        Tabs\Tab::make('DE')->schema([
                            Forms\Components\TextInput::make('title_de')->label('Titel (DE)'),
                        ]),
                        Tabs\Tab::make('ES')->schema([
                            Forms\Components\TextInput::make('title_es')->label('Título (ES)'),
                        ]),
                    ]),
                ])
                ->orderable(),

            // 🔥 Status
            Forms\Components\Toggle::make('is_active')
                ->label('Aktivdir')
                ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type')->label('Bölmə'),
                Tables\Columns\TextColumn::make('title_az')->label('Başlıq (AZ)'),
                Tables\Columns\BooleanColumn::make('is_active')->label('Status'),
            ])
            ->defaultSort('id', 'asc')
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
            'index' => Pages\ListAboutSections::route('/'),
            'create' => Pages\CreateAboutSection::route('/create'),
            'edit' => Pages\EditAboutSection::route('/{record}/edit'),
        ];
    }
}
