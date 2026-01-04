<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoadmapItemResource\Pages;
use App\Models\RoadmapItem;
use App\Models\Translation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Tabs;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class RoadmapItemResource extends Resource
{
    protected static ?string $model = RoadmapItem::class;
    protected static ?string $navigationIcon = 'heroicon-o-map';
    protected static ?string $navigationLabel = 'İnkişaf Xəritəsi';
    protected static ?string $pluralLabel = 'İnkişaf Xəritəsi';
    protected static ?string $navigationGroup = 'Sayt idarəetməsi';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('stage_number')
                ->label('Mərhələ nömrəsi (1–4)')
                ->numeric()
                ->required(),

            Forms\Components\TextInput::make('slug')
                ->label('Slug')
                ->unique()
                ->required()
                ->helperText('Example: security, home-appliances, electronics'),


            Forms\Components\FileUpload::make('image')
                ->label('Şəkil')
                ->directory('roadmap')
                ->image(),

            Forms\Components\Textarea::make('icon')
                ->label('İkon (SVG və ya class)')
                ->rows(3),

            Tabs::make('LangTabs')->tabs([
                Tabs\Tab::make('AZ')->schema([
                    Forms\Components\TextInput::make('title_az')->label('Başlıq (AZ)'),
                    Forms\Components\TextInput::make('subtitle_az')->label('Alt başlıq (AZ)'),
                    Forms\Components\RichEditor::make('desc_az')->label('Mətn (AZ)'),
                ]),
                Tabs\Tab::make('EN')->schema([
                    Forms\Components\TextInput::make('title_en')->label('Title (EN)'),
                    Forms\Components\TextInput::make('subtitle_en')->label('Subtitle (EN)'),
                    Forms\Components\RichEditor::make('desc_en')->label('Description (EN)'),
                ]),
                Tabs\Tab::make('RU')->schema([
                    Forms\Components\TextInput::make('title_ru')->label('Заголовок (RU)'),
                    Forms\Components\TextInput::make('subtitle_ru')->label('Подзаголовок (RU)'),
                    Forms\Components\RichEditor::make('desc_ru')->label('Описание (RU)'),
                ]),
                Tabs\Tab::make('DE')->schema([
                    Forms\Components\TextInput::make('title_de')->label('Titel (DE)'),
                    Forms\Components\TextInput::make('subtitle_de')->label('Untertitel (DE)'),
                    Forms\Components\RichEditor::make('desc_de')->label('Beschreibung (DE)'),
                ]),
                Tabs\Tab::make('ES')->schema([
                    Forms\Components\TextInput::make('title_es')->label('Título (ES)'),
                    Forms\Components\TextInput::make('subtitle_es')->label('Subtítulo (ES)'),
                    Forms\Components\RichEditor::make('desc_es')->label('Descripción (ES)'),
                ]),
                Tabs\Tab::make('FR')->schema([
                    Forms\Components\TextInput::make('title_fr')->label('Titre (FR)'),
                    Forms\Components\TextInput::make('subtitle_fr')->label('Sous-titre (FR)'),
                    Forms\Components\RichEditor::make('desc_fr')->label('Description (FR)'),
                ]),

                Tabs\Tab::make('ZH')->schema([
                    Forms\Components\TextInput::make('title_zh')->label('标题 (ZH)'),
                    Forms\Components\TextInput::make('subtitle_zh')->label('副标题 (ZH)'),
                    Forms\Components\RichEditor::make('desc_zh')->label('描述 (ZH)'),
                ]),

            ])->columnSpanFull(),

            Forms\Components\TextInput::make('button_link')
                ->label('Düymə linki'),

            Forms\Components\Select::make('button_key')
                ->label('Düymə tərcümə açarı')
                ->options(Translation::pluck('key', 'key')),

            Forms\Components\Toggle::make('is_active')->label('Aktivdir')->default(true),
            Forms\Components\TextInput::make('order')->numeric()->label('Sıralama'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('stage_number')->label('Mərhələ'),
                Tables\Columns\TextColumn::make('title_az')->label('Başlıq'),
                Tables\Columns\BooleanColumn::make('is_active')->label('Status'),
            ])
            ->defaultSort('order')
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRoadmapItems::route('/'),
            'create' => Pages\CreateRoadmapItem::route('/create'),
            'edit' => Pages\EditRoadmapItem::route('/{record}/edit'),
        ];
    }
}
