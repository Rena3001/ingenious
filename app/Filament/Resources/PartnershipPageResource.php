<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartnershipPageResource\Pages;
use App\Models\PartnershipPage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PartnershipPageResource extends Resource
{
    protected static ?string $model = PartnershipPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Partnership Pages';
    protected static ?string $navigationGroup = 'Main About';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                /* =========================
                 | Language Tabs
                 ========================= */
                Forms\Components\Tabs::make('Languages')
                    ->tabs([
                        self::languageTab('AZ', 'az'),
                        self::languageTab('EN', 'en'),
                        self::languageTab('RU', 'ru'),
                        self::languageTab('DE', 'de'),
                        self::languageTab('FR', 'fr'),
                        self::languageTab('ES', 'es'),
                        self::languageTab('ZH', 'zh'),
                    ])
                    ->columnSpanFull(),

                /* =========================
                 | Lists
                 ========================= */
                Forms\Components\Section::make('Lists')
                    ->schema([
                        Forms\Components\Repeater::make('collaboration_types')
                            ->label('Collaboration Types')
                            ->schema([
                                Forms\Components\TextInput::make('value')
                                    ->label('Item')
                                    ->required(),
                            ])
                            ->columnSpanFull(),

                        Forms\Components\Repeater::make('principles')
                            ->label('Partnership Principles')
                            ->schema([
                                Forms\Components\TextInput::make('value')
                                    ->label('Item')
                                    ->required(),
                            ])
                            ->columnSpanFull(),
                    ])
                    ->columns(1),

                /* =========================
                 | CTA
                 ========================= */
                Forms\Components\Section::make('CTA')
                    ->schema([
                        Forms\Components\TextInput::make('cta_button_link')
                            ->label('CTA Button Link')
                            ->url()
                            ->columnSpanFull(),
                    ]),

                /* =========================
                 | Images
                 ========================= */
                Forms\Components\Section::make('Images')
                    ->schema([
                        Forms\Components\FileUpload::make('image_1')
                            ->image()
                            ->directory('partnership'),

                        Forms\Components\FileUpload::make('image_2')
                            ->image()
                            ->directory('partnership'),

                        Forms\Components\FileUpload::make('image_3')
                            ->image()
                            ->directory('partnership'),
                    ])
                    ->columns(3),

                /* =========================
                 | Status
                 ========================= */
                Forms\Components\Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ]);
    }

    /* =========================
     | Language Tab generator
     ========================= */
    protected static function languageTab(string $label, string $locale): Forms\Components\Tabs\Tab
    {
        return Forms\Components\Tabs\Tab::make($label)
            ->schema([
                Forms\Components\TextInput::make("page_title_$locale")
                    ->label('Page Title')
                    ->required(),

                Forms\Components\TextInput::make("sidebar_title_$locale")
                    ->label('Sidebar Title')
                    ->required(),

                Forms\Components\TextInput::make("category_$locale")
                    ->label('Category')
                    ->nullable(),

                Forms\Components\Textarea::make("intro_text_$locale")
                    ->label('Intro Text')
                    ->rows(3),

                Forms\Components\RichEditor::make("description_text_$locale")
                    ->label('Description Text')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page_title_en')
                    ->label('Title')
                    ->searchable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
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
            'index' => Pages\ListPartnershipPages::route('/'),
            'create' => Pages\CreatePartnershipPage::route('/create'),
            'edit' => Pages\EditPartnershipPage::route('/{record}/edit'),
        ];
    }
}
