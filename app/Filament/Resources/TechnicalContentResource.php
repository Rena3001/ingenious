<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TechnicalContentResource\Pages;
use App\Models\TechnicalContent;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;

class TechnicalContentResource extends Resource
{
    protected static ?string $model = TechnicalContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';
    protected static ?string $navigationGroup = 'Technical Services';
    protected static ?string $navigationLabel = 'FAQ Contents';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([

                /* =====================
                   GENERAL
                ===================== */
                Forms\Components\Select::make('category_id')
                    ->label('FAQ Category')
                    ->required()
                    ->relationship('category', 'name_az')
                    ->preload(),

                Forms\Components\Select::make('layout')
                    ->label('Layout Style')
                    ->options([
                        'default'   => 'Image Left (default)',
                        'style-two' => 'Image Right (style-two)',
                    ])
                    ->default('default'),

                Forms\Components\TextInput::make('model_codes')
                    ->label('Model Codes')
                    ->helperText('Example: BO1-1-10MB, BO1-2-106-140MB'),

                /* =====================
                   MULTI LANGUAGE TABS
                ===================== */
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

                /* =====================
                   MEDIA
                ===================== */
                Forms\Components\TextInput::make('video_url')
                    ->label('Video URL'),

                Forms\Components\TextInput::make('pdf_url')
                    ->label('PDF Manual URL'),

                /* =====================
                   STATUS
                ===================== */
                Forms\Components\Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),

                Forms\Components\DateTimePicker::make('published_at')
                    ->label('Publish Date')
                    ->nullable(),
            ]);
    }

    protected static function langTab(string $lang, string $label)
    {
        return Forms\Components\Tabs\Tab::make($label)
            ->schema([
                Forms\Components\TextInput::make("title_$lang")
                    ->label("Question ($lang)")
                    ->required($lang === 'az'),

                Forms\Components\Textarea::make("content_$lang")
                    ->label("Answer ($lang)")
                    ->rows(6)
                    ->required($lang === 'az'),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_az')
                    ->label('Question')
                    ->searchable(),

                Tables\Columns\TextColumn::make('category_name_az')
                    ->label('Category')
                    ->badge(),

                Tables\Columns\TextColumn::make('layout')
                    ->badge(),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),

                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category_key')
                    ->options([
                        'security_faq'    => 'Security',
                        'home_faq'        => 'Home',
                        'electrical_faq'  => 'Electrical',
                        'electronics_faq' => 'Electronics',
                    ]),

                Tables\Filters\TernaryFilter::make('is_active'),
            ])
            ->defaultSort('published_at', 'desc')
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
            'index'  => Pages\ListTechnicalContents::route('/'),
            'create' => Pages\CreateTechnicalContent::route('/create'),
            'edit'   => Pages\EditTechnicalContent::route('/{record}/edit'),
        ];
    }
}
