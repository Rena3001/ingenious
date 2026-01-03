<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TechnicalServicesSliderResource\Pages;
use App\Models\TechnicalServicesSlider;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;

class TechnicalServicesSliderResource extends Resource
{
    protected static ?string $model = TechnicalServicesSlider::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Technical Services';
    protected static ?string $navigationLabel = 'Technical Services Slider';
    protected static ?string $modelLabel = 'Slider';
    protected static ?string $pluralModelLabel = 'Sliders';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Tabs::make('Technical Services Slider')
                ->tabs([

                    /* =====================
                       GENERAL
                    ====================== */
                    Tabs\Tab::make('General')
                        ->schema([
                            Forms\Components\FileUpload::make('background_image')
                                ->label('Background Image')
                                ->disk('public')
                                ->directory('sliders/technical-services')
                                ->image()
                                ->imageEditor()
                                ->openable()
                                ->downloadable()
                                ->columnSpanFull(),

                            Forms\Components\TextInput::make('button_link')
                                ->label('Button Link')
                                ->placeholder('/technical-services')
                                ->maxLength(255)
                                ->columnSpanFull(),

                            Forms\Components\TextInput::make('sort_order')
                                ->label('Sort Order')
                                ->numeric()
                                ->default(1)
                                ->required(),

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
                                    self::langTab('de'),
                                    self::langTab('fr'),
                                    self::langTab('es'),
                                    self::langTab('zh'),
                                ])
                                ->columnSpanFull(),
                        ]),
                ])
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('sort_order')
            ->columns([
                Tables\Columns\ImageColumn::make('background_image')
                    ->disk('public')
                    ->label('BG')
                    ->square(),

                Tables\Columns\TextColumn::make('title_en')
                    ->label('Title (EN)')
                    ->limit(40)
                    ->searchable(),

                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),
            ])
            ->defaultSort('sort_order')
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
            'index'  => Pages\ListTechnicalServicesSliders::route('/'),
            'create' => Pages\CreateTechnicalServicesSlider::route('/create'),
            'edit'   => Pages\EditTechnicalServicesSlider::route('/{record}/edit'),
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
