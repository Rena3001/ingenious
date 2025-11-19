<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Tabs;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Komanda';
    protected static ?string $pluralLabel = 'Komanda üzvləri';
    protected static ?string $navigationGroup = 'Sayt idarəetməsi';

    public static function form(Form $form): Form
    {
        return $form->schema([

            // ---- ŞƏKİL ----
            Forms\Components\FileUpload::make('image')
                ->label('Şəkil')
                ->directory('team')
                ->image()
                ->required()
                ->columnSpanFull(),

            // ---- 3 DİLLİ Tabs ----
            Tabs::make('LangTabs')
                ->tabs([

                    // AZ
                    Tabs\Tab::make('AZ')->schema([
                        Forms\Components\TextInput::make('name_az')
                            ->label('Ad (AZ)')
                            ->required(),

                        Forms\Components\TextInput::make('position_az')
                            ->label('Vəzifə (AZ)'),

                        Forms\Components\Textarea::make('desc_az')
                            ->label('Açıqlama (AZ)')
                            ->rows(3),
                    ]),

                    // EN
                    Tabs\Tab::make('EN')->schema([
                        Forms\Components\TextInput::make('name_en')
                            ->label('Name (EN)'),

                        Forms\Components\TextInput::make('position_en')
                            ->label('Position (EN)'),

                        Forms\Components\Textarea::make('desc_en')
                            ->label('Description (EN)')
                            ->rows(3),
                    ]),

                    // RU
                    Tabs\Tab::make('RU')->schema([
                        Forms\Components\TextInput::make('name_ru')
                            ->label('Имя (RU)'),

                        Forms\Components\TextInput::make('position_ru')
                            ->label('Должность (RU)'),

                        Forms\Components\Textarea::make('desc_ru')
                            ->label('Описание (RU)')
                            ->rows(3),
                    ]),
                ])
                ->columnSpanFull(),

            // ---- Sosial Media Linkləri ----
            Forms\Components\TextInput::make('twitter')
                ->label('Twitter URL'),

            Forms\Components\TextInput::make('facebook')
                ->label('Facebook URL'),

            Forms\Components\TextInput::make('linkedin')
                ->label('LinkedIn URL'),

            // ---- Sort & Status ----
            Forms\Components\TextInput::make('sort')
                ->numeric()
                ->default(0)
                ->label('Sıralama'),

            Forms\Components\Toggle::make('is_active')
                ->label('Aktiv')
                ->default(true),
        ])
        ->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([

            Tables\Columns\ImageColumn::make('image')
                ->label('Şəkil'),

            Tables\Columns\TextColumn::make('name_az')
                ->label('Ad (AZ)'), // əsas dil

            Tables\Columns\TextColumn::make('position_az')
                ->label('Vəzifə (AZ)'), // əsas dil

            Tables\Columns\BooleanColumn::make('is_active')
                ->label('Status'),

            Tables\Columns\TextColumn::make('sort')
                ->label('Sıra')
                ->sortable(),
        ])
        ->defaultSort('sort', 'asc')
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
