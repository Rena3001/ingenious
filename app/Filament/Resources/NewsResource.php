<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationLabel = 'News / Press / Events';
    protected static ?string $navigationGroup = 'News';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                /* =========================
                 | General
                 ========================= */
                Forms\Components\Section::make('General')
                    ->schema([
                        Forms\Components\Select::make('category')
                            ->label('Category')
                            ->options([
                                'news'   => 'News',
                                'press'  => 'Press',
                                'events' => 'Events',
                            ])
                            ->required(),

                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->helperText('Leave empty to auto-generate')
                            ->unique(ignoreRecord: true),
                    ])
                    ->columns(2),

                /* =========================
                 | Language Tabs
                 ========================= */
                Forms\Components\Tabs::make('Languages')
                    ->tabs([
                        self::langTab('AZ', 'az'),
                        self::langTab('EN', 'en'),
                        self::langTab('RU', 'ru'),
                        self::langTab('DE', 'de'),
                        self::langTab('FR', 'fr'),
                        self::langTab('ES', 'es'),
                        self::langTab('ZH', 'zh'),
                    ])
                    ->columnSpanFull(),

                /* =========================
                 | Media
                 ========================= */
                Forms\Components\Section::make('Media')
                    ->schema([
                        Forms\Components\FileUpload::make('main_image')
                            ->label('Main Image')
                            ->image()
                            ->directory('news')
                            ->required(),

                        Forms\Components\FileUpload::make('gallery')
                            ->label('Gallery')
                            ->multiple()
                            ->image()
                            ->directory('news/gallery'),
                    ])
                    ->columns(2),

                /* =========================
                 | Event Fields
                 ========================= */
                Forms\Components\Section::make('Event Details')
                    ->schema([
                        Forms\Components\DatePicker::make('event_date')
                            ->label('Event Date'),

                        Forms\Components\TextInput::make('event_location')
                            ->label('Event Location'),
                    ])
                    ->visible(fn ($get) => $get('category') === 'events')
                    ->columns(2),

                /* =========================
                 | Publish & Flags
                 ========================= */
                Forms\Components\Section::make('Publish')
                    ->schema([
                        Forms\Components\Toggle::make('is_featured')
                            ->label('Featured (Slider)'),

                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),

                        Forms\Components\DateTimePicker::make('published_at')
                            ->label('Publish Date'),
                    ])
                    ->columns(3),
            ]);
    }

    /* =========================
     | Language Tab generator
     ========================= */
    protected static function langTab(string $label, string $locale): Forms\Components\Tabs\Tab
    {
        return Forms\Components\Tabs\Tab::make($label)
            ->schema([
                Forms\Components\TextInput::make("title_$locale")
                    ->label('Title')
                    ->required(),

                Forms\Components\Textarea::make("short_description_$locale")
                    ->label('Short Description')
                    ->rows(3),

                Forms\Components\RichEditor::make("content_$locale")
                    ->label('Full Content')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_en')
                    ->label('Title')
                    ->searchable()
                    ->limit(40),

                Tables\Columns\BadgeColumn::make('category')
                    ->colors([
                        'primary' => 'news',
                        'warning' => 'press',
                        'success' => 'events',
                    ]),

                Tables\Columns\IconColumn::make('is_featured')
                    ->boolean()
                    ->label('Featured'),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),

                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->options([
                        'news'   => 'News',
                        'press'  => 'Press',
                        'events' => 'Events',
                    ]),
            ])
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
            'index'  => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit'   => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
