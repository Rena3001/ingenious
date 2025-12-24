<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CallToActionResource\Pages;
use App\Models\CallToAction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CallToActionResource extends Resource
{
    protected static ?string $model = CallToAction::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';
    protected static ?string $navigationGroup = 'Home Sections';
    protected static ?string $navigationLabel = 'Call To Action';

    public static function form(Form $form): Form
    {
        return $form->schema([

            Forms\Components\FileUpload::make('background_image')
                ->label('Background Image')
                ->directory('call-to-action')
                ->image()
                ->imageEditor()
                ->required(),

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

            Forms\Components\TextInput::make('button_url')
                ->label('Button URL')
                ->required(),

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

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListCallToActions::route('/'),
            'create' => Pages\CreateCallToAction::route('/create'),
            'edit'   => Pages\EditCallToAction::route('/{record}/edit'),
        ];
    }
}
