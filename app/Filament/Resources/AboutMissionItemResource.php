<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutMissionItemResource\Pages;
use App\Models\AboutMissionItem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AboutMissionItemResource extends Resource
{
    protected static ?string $model = AboutMissionItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';
    protected static ?string $navigationLabel = 'About – Mission Items Ikonlar';
    protected static ?string $navigationGroup = 'Sayt idarəetməsi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('icon')
                    ->label('Icon (SVG və ya class)')
                    ->placeholder('fa fa-shield  və ya  <svg>...</svg>')
                    ->helperText('FontAwesome class və ya tam SVG kodu daxil edin')
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\Tabs::make('Titles')
                    ->tabs([

                        Forms\Components\Tabs\Tab::make('AZ')
                            ->schema([
                                Forms\Components\TextInput::make('title_az')
                                    ->label('Başlıq (AZ)')
                                    ->required(),
                            ]),

                        Forms\Components\Tabs\Tab::make('EN')
                            ->schema([
                                Forms\Components\TextInput::make('title_en')
                                    ->label('Title (EN)')
                                    ->required(),
                            ]),

                        Forms\Components\Tabs\Tab::make('RU')
                            ->schema([
                                Forms\Components\TextInput::make('title_ru')
                                    ->label('Заголовок (RU)')
                                    ->required(),
                            ]),

                        Forms\Components\Tabs\Tab::make('DE')
                            ->schema([
                                Forms\Components\TextInput::make('title_de')
                                    ->label('Titel (DE)')
                                    ->required(),
                            ]),

                        Forms\Components\Tabs\Tab::make('ES')
                            ->schema([
                                Forms\Components\TextInput::make('title_es')
                                    ->label('Título (ES)')
                                    ->required(),
                            ]),

                        Forms\Components\Tabs\Tab::make('FR')
                            ->schema([
                                Forms\Components\TextInput::make('title_fr')
                                    ->label('Titre (FR)')
                                    ->required(),
                            ]),

                        Forms\Components\Tabs\Tab::make('ZH')
                            ->schema([
                                Forms\Components\TextInput::make('title_zh')
                                    ->label('标题 (ZH)')
                                    ->required(),
                            ]),

                    ])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('icon')
                    ->label('Icon')
                    ->limit(20),

                Tables\Columns\TextColumn::make('title_az')
                    ->label('Title (AZ)')
                    ->searchable(),

                Tables\Columns\TextColumn::make('title_en')
                    ->label('Title (EN)')
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime()
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAboutMissionItems::route('/'),
            'create' => Pages\CreateAboutMissionItem::route('/create'),
            'edit' => Pages\EditAboutMissionItem::route('/{record}/edit'),
        ];
    }
}
