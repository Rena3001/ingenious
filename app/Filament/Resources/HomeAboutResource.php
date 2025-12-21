<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeAboutResource\Pages;
use App\Models\HomeAbout;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class HomeAboutResource extends Resource
{
    protected static ?string $model = HomeAbout::class;
    protected static ?string $navigationLabel = 'Why BAMoONE?';
    protected static ?string $navigationGroup = 'Sayt idarəetməsi';
    protected static ?string $navigationIcon = 'heroicon-o-light-bulb';

    public static function form(Form $form): Form
    {
        return $form->schema([

            Forms\Components\FileUpload::make('image')
                ->label('Şəkil')
                ->directory('home-about')
                ->image()
                ->columnSpanFull(),

            Forms\Components\FileUpload::make('background_image')
                ->label('Background Image')
                ->directory('home-about')
                ->image()
                ->imageEditor(),


            Forms\Components\Toggle::make('is_active')
                ->label('Aktivdir')
                ->default(true),

            Forms\Components\Tabs::make('LangTabs')->tabs([

                Forms\Components\Tabs\Tab::make('AZ')->schema([
                    Forms\Components\TextInput::make('title_az')->label('Başlıq (AZ)'),
                    Forms\Components\RichEditor::make('desc_az')->label('Mətn (AZ)'),
                ]),

                Forms\Components\Tabs\Tab::make('EN')->schema([
                    Forms\Components\TextInput::make('title_en')->label('Title (EN)'),
                    Forms\Components\RichEditor::make('desc_en')->label('Description (EN)'),
                ]),

                Forms\Components\Tabs\Tab::make('RU')->schema([
                    Forms\Components\TextInput::make('title_ru')->label('Заголовок (RU)'),
                    Forms\Components\RichEditor::make('desc_ru')->label('Описание (RU)'),
                ]),

                Forms\Components\Tabs\Tab::make('DE')->schema([
                    Forms\Components\TextInput::make('title_de')->label('Titel (DE)'),
                    Forms\Components\RichEditor::make('desc_de')->label('Text (DE)'),
                ]),

                Forms\Components\Tabs\Tab::make('ES')->schema([
                    Forms\Components\TextInput::make('title_es')->label('Título (ES)'),
                    Forms\Components\RichEditor::make('desc_es')->label('Descripción (ES)'),
                ]),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title_az')->label('Başlıq'),
            Tables\Columns\BooleanColumn::make('is_active')->label('Status'),
        ])
        ->actions([Tables\Actions\EditAction::make()])
        ->bulkActions([Tables\Actions\DeleteBulkAction::make()]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHomeAbouts::route('/'),
            'create' => Pages\CreateHomeAbout::route('/create'),
            'edit' => Pages\EditHomeAbout::route('/{record}/edit'),
        ];
    }
}
