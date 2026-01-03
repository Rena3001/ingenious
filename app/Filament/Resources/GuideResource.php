<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GuideResource\Pages;
use App\Models\Guide;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;

class GuideResource extends Resource
{
    protected static ?string $model = Guide::class;

    protected static ?string $navigationIcon = 'heroicon-o-play-circle';
    protected static ?string $navigationGroup = 'Technical Services';
    protected static ?string $navigationLabel = 'Guides & Tutorials';
    protected static ?string $pluralLabel = 'Guides & Tutorials';

    /* =====================================================
       FORM
    ===================================================== */
    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([

            /* ===============================
               GENERAL
            =============================== */
            Forms\Components\Section::make('General Information')
                ->schema([

                    Forms\Components\Select::make('category_id')
                        ->label('Category')
                        ->relationship('category', 'name_az')
                        ->searchable()
                        ->preload()
                        ->required(),

                    Forms\Components\TextInput::make('model_code')
                        ->label('Model Code')
                        ->placeholder('BO1-1-10MB')
                        ->helperText('Exact model code')
                        ->maxLength(255),

                ])->columns(2),

            /* ===============================
               MULTI LANGUAGE
            =============================== */
            Forms\Components\Tabs::make('Languages')
                ->tabs([
                    self::langTab('az', 'Azərbaycan'),
                    self::langTab('en', 'English'),
                    self::langTab('ru', 'Русский'),
                    self::langTab('de', 'Deutsch'),
                    self::langTab('es', 'Español'),
                    self::langTab('fr', 'Français'),
                    self::langTab('zh', '中文'),
                ]),

            /* ===============================
               MEDIA
            =============================== */
            Forms\Components\Section::make('Video')
                ->schema([

                    Forms\Components\TextInput::make('video_embed_url')
                        ->label('Video Embed URL')
                        ->placeholder('https://www.youtube.com/embed/XXXX'),

                    Forms\Components\TextInput::make('video_watch_url')
                        ->label('Watch Video URL')
                        ->placeholder('https://www.youtube.com/watch?v=XXXX'),

                ])->columns(2),

            /* ===============================
               STATUS
            =============================== */
            Forms\Components\Section::make('Status')
                ->schema([

                    Forms\Components\Toggle::make('is_active')
                        ->label('Active')
                        ->default(true),

                    Forms\Components\DateTimePicker::make('published_at')
                        ->label('Publish Date')
                        ->nullable(),

                ])->columns(2),
        ]);
    }

    protected static function langTab(string $lang, string $label): Forms\Components\Tabs\Tab
    {
        return Forms\Components\Tabs\Tab::make($label)
            ->schema([

                Forms\Components\TextInput::make("product_name_$lang")
                    ->label("Product Name ($lang)")
                    ->required($lang === 'az')
                    ->maxLength(255),

                Forms\Components\Textarea::make("description_$lang")
                    ->label("Description ($lang)")
                    ->rows(4)
                    ->required($lang === 'az'),

            ]);
    }

    /* =====================================================
       TABLE
    ===================================================== */
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('product_name_az')
                    ->label('Product')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('model_code')
                    ->label('Model')
                    ->badge(),

                Tables\Columns\TextColumn::make('category.name_az')
                    ->label('Category')
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),

                Tables\Columns\TextColumn::make('published_at')
                    ->label('Published')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([

                Tables\Filters\SelectFilter::make('category_id')
                    ->relationship('category', 'name_az')
                    ->label('Category'),

                Tables\Filters\TernaryFilter::make('is_active'),

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->defaultSort('published_at', 'desc');
    }

    /* =====================================================
       PAGES
    ===================================================== */
    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListGuides::route('/'),
            'create' => Pages\CreateGuide::route('/create'),
            'edit'   => Pages\EditGuide::route('/{record}/edit'),
        ];
    }
}
