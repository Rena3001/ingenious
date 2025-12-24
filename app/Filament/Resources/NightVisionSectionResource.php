<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NightVisionSectionResource\Pages;
use App\Models\NightVisionSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;

class NightVisionSectionResource extends Resource
{
    protected static ?string $model = NightVisionSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-moon';
    protected static ?string $navigationGroup = 'Site Sections';
    protected static ?string $navigationLabel = 'Night Vision';
    protected static ?string $modelLabel = 'Night Vision Section';
    protected static ?string $pluralModelLabel = 'Night Vision Sections';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Tabs::make('Night Vision Section')
                ->tabs([

                    /* =====================
                       GENERAL
                    ====================== */
                    Tabs\Tab::make('General')
                        ->schema([
                            Forms\Components\FileUpload::make('image')
                                ->label('Section Image')
                                ->disk('public')
                                ->directory('sections/night-vision')
                                ->image()
                                ->maxFiles(1) // 🔴 Vacib
                                ->saveUploadedFileUsing(fn ($file) =>
                                    $file->store('sections/night-vision', 'public')
                                )
                                ->columnSpanFull(),

                            Forms\Components\Toggle::make('is_active')
                                ->label('Active')
                                ->default(true),
                        ]),

                    /* =====================
                       CONTENT
                    ====================== */
                    Tabs\Tab::make('Content')
                        ->schema([
                            Tabs::make('Languages')
                                ->tabs([
                                    self::langTab('az'),
                                    self::langTab('en'),
                                    self::langTab('ru'),
                                    self::langTab('es'),
                                    self::langTab('de'),
                                    self::langTab('fr'),
                                    self::langTab('zh'),
                                ])
                                ->columnSpanFull(),
                        ]),

                    /* =====================
                       BUTTONS
                    ====================== */
                    Tabs\Tab::make('Buttons')
                        ->schema([
                            Forms\Components\TextInput::make('button_primary_url')
                                ->label('Primary Button URL')
                                ->url()
                                ->columnSpanFull(),

                            Forms\Components\TextInput::make('button_secondary_url')
                                ->label('Secondary Button URL')
                                ->url()
                                ->columnSpanFull(),
                        ]),
                ])
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->disk('public')
                    ->label('Image')
                    ->square(),

                Tables\Columns\TextColumn::make('title_en')
                    ->label('Title (EN)')
                    ->limit(40),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),
            ])
            ->defaultSort('id', 'desc')
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListNightVisionSections::route('/'),
            'create' => Pages\CreateNightVisionSection::route('/create'),
            'edit'   => Pages\EditNightVisionSection::route('/{record}/edit'),
        ];
    }

    /* =====================
       LANGUAGE TAB HELPER
    ====================== */
    private static function langTab(string $lang): Tabs\Tab
    {
        $label = strtoupper($lang);

        return Tabs\Tab::make($label)
            ->schema([
                Forms\Components\TextInput::make("title_{$lang}")
                    ->label("Title ({$label})")
                    ->maxLength(255)
                    ->columnSpanFull(),

                Forms\Components\Textarea::make("description_{$lang}")
                    ->label("Description ({$label})")
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }
}
