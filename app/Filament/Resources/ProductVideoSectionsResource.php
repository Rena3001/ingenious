<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductVideoSectionsResource\Pages;
use App\Models\ProductVideoSections;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;

class ProductVideoSectionsResource extends Resource
{
    protected static ?string $model = ProductVideoSections::class;

    protected static ?string $navigationIcon = 'heroicon-o-video-camera';
    protected static ?string $navigationGroup = 'Technical Services';
    protected static ?string $navigationLabel = 'Video Guide Section';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Tabs::make('Video Section')
                ->tabs([

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

                    /* =====================
                       FILTER LABELS
                    ====================== */
                    Tabs\Tab::make('Filters')
                        ->schema([
                            Forms\Components\TextInput::make('filter_all_label')
                                ->label('All Products Label'),

                            Forms\Components\TextInput::make('filter_security_label')
                                ->label('Security Products Label'),

                            Forms\Components\TextInput::make('filter_home_label')
                                ->label('Home Appliances Label'),

                            Forms\Components\TextInput::make('filter_electrical_label')
                                ->label('Electrical Equipment Label'),

                            Forms\Components\TextInput::make('filter_electronics_label')
                                ->label('Consumer Electronics Label'),
                        ]),

                    Tabs\Tab::make('Status')
                        ->schema([
                            Forms\Components\Toggle::make('is_active')
                                ->default(true),
                        ]),
                ])
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_en')
                    ->label('Title (EN)')
                    ->limit(40),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListProductVideoSections::route('/'),
            'create' => Pages\CreateProductVideoSections::route('/create'),
            'edit'   => Pages\EditProductVideoSections::route('/{record}/edit'),
        ];
    }

    private static function langTab(string $lang): Tabs\Tab
    {
        $label = strtoupper($lang);

        return Tabs\Tab::make($label)
            ->schema([
                Forms\Components\TextInput::make("title_{$lang}")
                    ->label("Title ({$label})")
                    ->columnSpanFull(),

                Forms\Components\Textarea::make("description_{$lang}")
                    ->label("Description ({$label})")
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }
}
