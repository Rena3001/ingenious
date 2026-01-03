<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WhyBamooneTestimonialsResource\Pages;
use App\Models\WhyBamooneTestimonials;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;

class WhyBamooneTestimonialsResource extends Resource
{
    protected static ?string $model = WhyBamooneTestimonials::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static ?string $navigationGroup = 'Technical Services';
    protected static ?string $navigationLabel = 'Why BAMoONE Sections';
    protected static ?string $pluralModelLabel = 'Why BAMoONE Sections';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Tabs::make('Why BAMoONE')
                ->tabs([

                    /* GENERAL */
                    Tabs\Tab::make('General')
                        ->schema([
                            Forms\Components\FileUpload::make('image_logo')
                                ->label('Logo / Image')
                                ->disk('public')
                                ->directory('why-bamoone')
                                ->image()
                                ->imageEditor()
                                ->openable()
                                ->downloadable(),

                            Forms\Components\TextInput::make('sort_order')
                                ->numeric()
                                ->required(),

                            Forms\Components\Toggle::make('is_active')
                                ->label('Active')
                                ->default(true),
                        ]),

                    /* CONTENT */
                    Tabs\Tab::make('Content')
                        ->schema([
                            Tabs::make('Languages')
                                ->tabs([
                                    self::langTab('az'),
                                    self::langTab('en'),
                                    self::langTab('ru'),
                                    self::langTab('de'),
                                    self::langTab('fr'),
                                    self::langTab('es'),
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
            ->reorderable('sort_order')
            ->columns([
                Tables\Columns\ImageColumn::make('image_logo')
                    ->disk('public')
                    ->label('Logo')
                    ->square(),

                Tables\Columns\TextColumn::make('title_en')
                    ->label('Title (EN)')
                    ->limit(30)
                    ->searchable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),

                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable(),
            ])
            ->defaultSort('sort_order')
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
            'index'  => Pages\ListWhyBamooneTestimonials::route('/'),
            'create' => Pages\CreateWhyBamooneTestimonials::route('/create'),
            'edit'   => Pages\EditWhyBamooneTestimonials::route('/{record}/edit'),
        ];
    }

    /* LANGUAGE TAB */
    private static function langTab(string $lang): Tabs\Tab
    {
        $label = strtoupper($lang);

        return Tabs\Tab::make($label)
            ->schema([
                Forms\Components\TextInput::make("title_{$lang}")
                    ->label("Title ({$label})")
                    ->maxLength(255),

                Forms\Components\Textarea::make("description_{$lang}")
                    ->label("Description ({$label})")
                    ->rows(4),
            ]);
    }
}
