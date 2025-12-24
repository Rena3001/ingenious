<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CallToActionTwoResource\Pages;
use App\Models\CallToActionTwo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;

class CallToActionTwoResource extends Resource
{
    protected static ?string $model = CallToActionTwo::class;

    protected static ?string $navigationIcon = 'heroicon-o-bolt';
    protected static ?string $navigationGroup = 'Site Sections';
    protected static ?string $navigationLabel = 'Call To Action (Type 2)';
    protected static ?string $modelLabel = 'Call To Action';
    protected static ?string $pluralModelLabel = 'Call To Actions';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Tabs::make('Call To Action Section')
                ->tabs([

                    /* =====================
                       GENERAL
                    ====================== */
                    Tabs\Tab::make('General')
                        ->schema([
                            Forms\Components\FileUpload::make('background_image')
                                ->label('Background Image')
                                ->disk('public')
                                ->directory('sections/call-to-action-2')
                                ->image()
                                ->maxFiles(1) // 🔴 vacib
                                ->saveUploadedFileUsing(fn ($file) =>
                                    $file->store('sections/call-to-action-2', 'public')
                                )
                                ->columnSpanFull(),

                            Forms\Components\TextInput::make('button_url')
                                ->label('Button URL')
                                ->url()
                                ->columnSpanFull(),
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

                Tables\Columns\TextColumn::make('title_en')
                    ->label('Title (EN)')
                    ->limit(40),

                Tables\Columns\TextColumn::make('subtitle_en')
                    ->label('Subtitle (EN)')
                    ->limit(40),
            ])
            ->defaultSort('id', 'desc')
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListCallToActionTwos::route('/'),
            'create' => Pages\CreateCallToActionTwo::route('/create'),
            'edit'   => Pages\EditCallToActionTwo::route('/{record}/edit'),
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

                Forms\Components\Textarea::make("subtitle_{$lang}")
                    ->label("Subtitle ({$label})")
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}
