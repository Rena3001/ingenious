<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LocalRecordingResource\Pages;
use App\Models\LocalRecording;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;

class LocalRecordingResource extends Resource
{
    protected static ?string $model = LocalRecording::class;

    protected static ?string $navigationIcon = 'heroicon-o-video-camera';
    protected static ?string $navigationGroup = 'Site Sections';
    protected static ?string $navigationLabel = 'Local Recording';
    protected static ?string $modelLabel = 'Local Recording';
    protected static ?string $pluralModelLabel = 'Local Recordings';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Tabs::make('Local Recording Section')
                ->tabs([

                    /* =====================
                       GENERAL
                    ====================== */
                    Tabs\Tab::make('General')
                        ->schema([
                            Forms\Components\FileUpload::make('background_image')
                                ->label('Background Image')
                                ->disk('public')
                                ->directory('sections/local-recording/background')
                                ->image()
                                ->maxFiles(1)
                                ->saveUploadedFileUsing(fn ($file) =>
                                    $file->store('sections/local-recording/background', 'public')
                                )
                                ->columnSpanFull(),

                            Forms\Components\FileUpload::make('content_image')
                                ->label('Content Image')
                                ->disk('public')
                                ->directory('sections/local-recording/content')
                                ->image()
                                ->maxFiles(1)
                                ->saveUploadedFileUsing(fn ($file) =>
                                    $file->store('sections/local-recording/content', 'public')
                                )
                                ->columnSpanFull(),

                            Forms\Components\Toggle::make('is_active')
                                ->label('Active')
                                ->default(true),
                        ]),

                    /* =====================
                       CONTENT
                    ====================== */
                    Tabs\Tab::make('Content')
                        ->schema([
                            Tabs::make('Languages')
                                ->tabs([
                                    self::langTab('az'),
                                    self::langTab('en'),
                                    self::langTab('ru'),
                                    self::langTab('es'),
                                    self::langTab('de'),
                                    self::langTab('fr'),
                                    self::langTab('zh'),
                                ])
                                ->columnSpanFull(),
                        ]),
                ])
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('background_image')
                    ->disk('public')
                    ->label('Background')
                    ->square(),

                Tables\Columns\ImageColumn::make('content_image')
                    ->disk('public')
                    ->label('Content')
                    ->square(),

                Tables\Columns\TextColumn::make('title_en')
                    ->label('Title (EN)')
                    ->limit(40),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),
            ])
            ->defaultSort('id', 'desc')
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListLocalRecordings::route('/'),
            'create' => Pages\CreateLocalRecording::route('/create'),
            'edit'   => Pages\EditLocalRecording::route('/{record}/edit'),
        ];
    }

    /* =====================
       LANGUAGE TAB HELPER
    ====================== */
    private static function langTab(string $lang): Tabs\Tab
    {
        $label = strtoupper($lang);

        return Tabs\Tab::make($label)
            ->schema([
                Forms\Components\TextInput::make("title_{$lang}")
                    ->label("Title ({$label})")
                    ->maxLength(255)
                    ->columnSpanFull(),

                Forms\Components\Textarea::make("description_{$lang}")
                    ->label("Description ({$label})")
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }
}
