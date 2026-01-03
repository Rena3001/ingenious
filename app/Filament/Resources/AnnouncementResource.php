<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnnouncementResource\Pages;
use App\Models\Announcement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AnnouncementResource extends Resource
{
    protected static ?string $model = Announcement::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';
    protected static ?string $navigationLabel = 'Announcements & Campaigns';
    protected static ?string $navigationGroup = 'Announcements & Campaigns';

    public static function form(Form $form): Form
    {
        return $form->schema([

            /* =========================
             | General
             ========================= */
            Forms\Components\Section::make('General')
                ->schema([
                    Forms\Components\Select::make('type')
                        ->label('Type')
                        ->options([
                            'overview'     => 'Overview',
                            'announcement' => 'Announcement',
                            'campaign'     => 'Campaign',
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
                        ->directory('announcements')
                        ->required(),

                    Forms\Components\FileUpload::make('gallery')
                        ->label('Gallery')
                        ->multiple()
                        ->image()
                        ->directory('announcements/gallery'),
                ])
                ->columns(2),

            /* =========================
             | Campaign Dates
             ========================= */
            Forms\Components\Section::make('Campaign Dates')
                ->schema([
                    Forms\Components\DatePicker::make('start_date')
                        ->label('Start Date'),

                    Forms\Components\DatePicker::make('end_date')
                        ->label('End Date'),
                ])
                ->visible(fn ($get) => $get('type') === 'campaign')
                ->columns(2),

            /* =========================
             | Publish
             ========================= */
            Forms\Components\Section::make('Publish')
                ->schema([
                    Forms\Components\Toggle::make('is_active')
                        ->label('Active')
                        ->default(true),

                    Forms\Components\TextInput::make('sort_order')
                        ->numeric()
                        ->default(0),

                    Forms\Components\DateTimePicker::make('published_at')
                        ->label('Publish Date'),
                ])
                ->columns(3),
        ]);
    }

    /* =========================
     | Language tab generator
     ========================= */
    protected static function langTab(string $label, string $locale): Forms\Components\Tabs\Tab
    {
        return Forms\Components\Tabs\Tab::make($label)
            ->schema([
                Forms\Components\TextInput::make("title_$locale")
                    ->label('Title')
                    ->required(),

                Forms\Components\Textarea::make("intro_$locale")
                    ->label('Intro Text')
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
                    ->limit(40)
                    ->searchable(),

                Tables\Columns\BadgeColumn::make('type')
                    ->colors([
                        'primary' => 'overview',
                        'warning' => 'announcement',
                        'success' => 'campaign',
                    ]),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),

                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'overview'     => 'Overview',
                        'announcement' => 'Announcement',
                        'campaign'     => 'Campaign',
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
            'index'  => Pages\ListAnnouncements::route('/'),
            'create' => Pages\CreateAnnouncement::route('/create'),
            'edit'   => Pages\EditAnnouncement::route('/{record}/edit'),
        ];
    }
}
