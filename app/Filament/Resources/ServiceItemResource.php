<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceItemResource\Pages;
use App\Models\ServiceItem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ServiceItemResource extends Resource
{
    protected static ?string $model = ServiceItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';
    protected static ?string $navigationLabel = 'Service Items';
    protected static ?string $navigationGroup = 'Home Sections';
    protected static ?int $navigationSort = 50;

    public static function form(Form $form): Form
    {
        return $form->schema([

            /* ================= BASIC ================= */
            Forms\Components\Section::make('Basic Info')
                ->schema([
          

                    Forms\Components\TextInput::make('icon')
                        ->label('Icon Class (flaticon-*)')
                        ->placeholder('flaticon-smartphone-4')
                        ->required(),

                    Forms\Components\FileUpload::make('image')
                        ->label('Image')
                        ->directory('services')
                        ->image()
                        ->required(),

                    Forms\Components\TextInput::make('button_link')
                        ->label('Button Link')
                        ->placeholder('#'),
                ])->columns(2),

            /* ================= TRANSLATIONS ================= */
            Forms\Components\Section::make('Translations')
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

            /* ================= SETTINGS ================= */
            Forms\Components\Section::make('Settings')
                ->schema([
                    Forms\Components\TextInput::make('sort_order')
                        ->numeric()
                        ->default(0),

                    Forms\Components\Toggle::make('is_active')
                        ->default(true),
                ])->columns(2),
        ]);
    }

    protected static function langTab(string $locale)
    {
        return Forms\Components\Tabs\Tab::make(strtoupper($locale))
            ->schema([
                Forms\Components\TextInput::make("title_$locale")
                    ->label('Title')
                    ->maxLength(255),

                Forms\Components\Textarea::make("description_$locale")
                    ->label('Description')
                    ->rows(3),

                Forms\Components\Textarea::make("overlay_$locale")
                    ->label('Overlay Text (Hover)')
                    ->rows(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->label('Image'),
                Tables\Columns\TextColumn::make('title_en')->label('Title (EN)')->searchable(),
                Tables\Columns\TextColumn::make('icon')->label('Icon'),
                Tables\Columns\TextColumn::make('sort_order')->sortable(),
                Tables\Columns\IconColumn::make('is_active')->boolean(),
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
            'index'  => Pages\ListServiceItems::route('/'),
            'create' => Pages\CreateServiceItem::route('/create'),
            'edit'   => Pages\EditServiceItem::route('/{record}/edit'),
        ];
    }
}
