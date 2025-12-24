<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConsumerElectronicsSliderResource\Pages;
use App\Models\ConsumerElectronicsSlider;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ConsumerElectronicsSliderResource extends Resource
{
    protected static ?string $model = ConsumerElectronicsSlider::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Home Sliders';
    protected static ?string $navigationLabel = 'Consumer Electronics Slider';

    public static function form(Form $form): Form
    {
        return $form->schema([

            Forms\Components\FileUpload::make('background_image')
                ->label('Background Image')
                ->directory('sliders/consumer')
                ->image()
                ->imageEditor()
                ->required(),

            Forms\Components\FileUpload::make('content_image')
                ->label('Content Image')
                ->directory('sliders/consumer')
                ->image()
                ->imageEditor(),

            Forms\Components\Tabs::make('Translations')
                ->tabs([
                    self::langTab('az'),
                    self::langTab('en'),
                    self::langTab('ru'),
                    self::langTab('de'),
                    self::langTab('fr'),
                    self::langTab('es'),
                    self::langTab('zh'),
                ]),

            Forms\Components\TextInput::make('button_link')
                ->label('Button Link')
                ->required(),

            Forms\Components\TextInput::make('sort_order')
                ->numeric()
                ->default(0),

            Forms\Components\Toggle::make('is_active')
                ->label('Active')
                ->default(true),
        ]);
    }

    protected static function langTab(string $locale): Forms\Components\Tabs\Tab
    {
        return Forms\Components\Tabs\Tab::make(strtoupper($locale))
            ->schema([
                Forms\Components\TextInput::make("title_{$locale}")
                    ->label("Title ({$locale})")
                    ->required(),

                Forms\Components\Textarea::make("description_{$locale}")
                    ->label("Description ({$locale})")
                    ->rows(4),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('background_image')
                    ->label('BG'),

                Tables\Columns\TextColumn::make('title_en')
                    ->label('Title')
                    ->searchable(),

                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
            ])
            ->defaultSort('sort_order')
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListConsumerElectronicsSliders::route('/'),
            'create' => Pages\CreateConsumerElectronicsSlider::route('/create'),
            'edit'   => Pages\EditConsumerElectronicsSlider::route('/{record}/edit'),
        ];
    }
}
