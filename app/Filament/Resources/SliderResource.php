<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SliderResource\Pages;
use App\Models\Slider;
use App\Models\Translation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;
use Filament\Resources\Resource;
use Filament\Tables;

class SliderResource extends Resource
{
    protected static ?string $model = Slider::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Slayderlər';
    protected static ?string $pluralLabel = 'Slayderlər';
    protected static ?string $navigationGroup = 'Sayt idarəetməsi';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Tabs::make('LangTabs')->tabs([
                Tabs\Tab::make('AZ')->schema([
                    Forms\Components\TextInput::make('title_az')
                        ->label('Başlıq (AZ)')
                        ->maxLength(255)
                        ->required(),

                    Forms\Components\Textarea::make('description_az')
                        ->label('Mətn (AZ)')
                        ->rows(3),
                ]),

                Tabs\Tab::make('EN')->schema([
                    Forms\Components\TextInput::make('title_en')
                        ->label('Title (EN)')
                        ->maxLength(255),

                    Forms\Components\Textarea::make('description_en')
                        ->label('Text (EN)')
                        ->rows(3),
                ]),

                Tabs\Tab::make('RU')->schema([
                    Forms\Components\TextInput::make('title_ru')
                        ->label('Заголовок (RU)')
                        ->maxLength(255),

                    Forms\Components\Textarea::make('description_ru')
                        ->label('Текст (RU)')
                        ->rows(3),
                ]),
            ])->columnSpanFull(),

            Forms\Components\FileUpload::make('image')
                ->label('Şəkil')
                ->image()
                ->directory('sliders')
                ->required(),

            Forms\Components\Select::make('button_key')
                ->label('Düymə tərcümə açarı')
                ->options(
                    Translation::pluck('key', 'key')->toArray()
                )
                ->searchable()
                ->placeholder('Seçin və ya boş buraxın'),

            Forms\Components\TextInput::make('button_url')
                ->label('Düymə linki (URL)')
                ->placeholder('https://example.com'),

            Forms\Components\TextInput::make('order')
                ->numeric()
                ->label('Sıra nömrəsi')
                ->default(0),

            Forms\Components\Toggle::make('is_active')
                ->label('Aktivdir')
                ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->label('Şəkil'),
                Tables\Columns\TextColumn::make('title_az')->label('Başlıq (AZ)')->searchable(),
                Tables\Columns\TextColumn::make('button_key')->label('Tərcümə açarı'),
                Tables\Columns\BooleanColumn::make('is_active')->label('Status'),
                Tables\Columns\TextColumn::make('order')->label('Sıra'),
            ])
            ->defaultSort('order')
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
            'index' => Pages\ListSliders::route('/'),
            'create' => Pages\CreateSlider::route('/create'),
            'edit' => Pages\EditSlider::route('/{record}/edit'),
        ];
    }
}
