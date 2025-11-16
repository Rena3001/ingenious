<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutSectionResource\Pages;
use App\Filament\Resources\AboutSectionResource\RelationManagers;
use App\Models\AboutSection;
use Filament\Forms;
use Filament\Forms\Form;
use App\Models\Translation;
use Filament\Resources\Resource;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Repeater;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutSectionResource extends Resource
{
    protected static ?string $model = AboutSection::class;
    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationLabel = 'Haqqımızda Bölmələri';
    protected static ?string $pluralLabel = 'Haqqımızda Bölmələri';
    protected static ?string $navigationGroup = 'Sayt idarəetməsi';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('type')
                ->label('Bölmə növü')
                ->options([
                    'about_section_three' => 'About Section Three',
                    'our_standards' => 'Our Standards',
                    'our_mission' => 'Our Mission',
                ])
                ->required()
                ->reactive(),

            Tabs::make('LangTabs')->tabs([
                Tabs\Tab::make('AZ')->schema([
                    Forms\Components\TextInput::make('title_az')->label('Başlıq (AZ)'),
                    Forms\Components\RichEditor::make('content_az')->label('Mətn (AZ)'),
                    Forms\Components\Textarea::make('short_desc_az')->label('Qısa təsvir (AZ)'),
                ]),
                Tabs\Tab::make('EN')->schema([
                    Forms\Components\TextInput::make('title_en')->label('Title (EN)'),
                    Forms\Components\RichEditor::make('content_en')->label('Text (EN)'),
                    Forms\Components\Textarea::make('short_desc_en')->label('Short desc (EN)'),
                ]),
                Tabs\Tab::make('RU')->schema([
                    Forms\Components\TextInput::make('title_ru')->label('Заголовок (RU)'),
                    Forms\Components\RichEditor::make('content_ru')->label('Текст (RU)'),
                    Forms\Components\Textarea::make('short_desc_ru')->label('Краткое описание (RU)'),
                ]),
            ])->columnSpanFull(),

            Forms\Components\Select::make('button_key')
                ->label('Düymə tərcümə açarı (yalnız About üçün)')
                ->options(Translation::pluck('key', 'key')->toArray())
                ->visible(fn ($get) => $get('type') === 'about_section_three'),

            // Mission üçün alt hissə
            Repeater::make('missionItems')
                ->relationship('missionItems')
                ->label('Mission alt blokları')
                ->visible(fn ($get) => $get('type') === 'our_mission')
                ->schema([
                    Forms\Components\TextInput::make('icon')
                        ->label('İkon class (məs: flaticon-target-2)')
                        ->required(),
                    Tabs::make('LangTabs')->tabs([
                        Tabs\Tab::make('AZ')->schema([
                            Forms\Components\TextInput::make('title_az')->label('Başlıq (AZ)'),
                            Forms\Components\Textarea::make('text_az')->label('Mətn (AZ)'),
                        ]),
                        Tabs\Tab::make('EN')->schema([
                            Forms\Components\TextInput::make('title_en')->label('Title (EN)'),
                            Forms\Components\Textarea::make('text_en')->label('Text (EN)'),
                        ]),
                        Tabs\Tab::make('RU')->schema([
                            Forms\Components\TextInput::make('title_ru')->label('Заголовок (RU)'),
                            Forms\Components\Textarea::make('text_ru')->label('Текст (RU)'),
                        ]),
                    ]),
                ])
                ->orderable(),

            Forms\Components\Toggle::make('is_active')
                ->label('Aktivdir')
                ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type')->label('Bölmə'),
                Tables\Columns\TextColumn::make('title_az')->label('Başlıq (AZ)'),
                Tables\Columns\BooleanColumn::make('is_active')->label('Status'),
            ])
            ->defaultSort('id', 'asc')
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
            'index' => Pages\ListAboutSections::route('/'),
            'create' => Pages\CreateAboutSection::route('/create'),
            'edit' => Pages\EditAboutSection::route('/{record}/edit'),
        ];
    }
}

