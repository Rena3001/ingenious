<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SupportResource\Pages;
use App\Models\Support;
use App\Models\SupportResourcesSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;

class SupportResource extends Resource
{
    protected static ?string $model = SupportResourcesSection::class;

    protected static ?string $navigationIcon  = 'heroicon-o-lifebuoy';
    protected static ?string $navigationGroup = 'Technical Services';
    protected static ?string $navigationLabel = 'Support Resources Sections';
    protected static ?string $modelLabel      = 'Support Item';
    protected static ?string $pluralModelLabel = 'Support Items';

    /* =========================
       FORM
    ========================= */
    public static function form(Form $form): Form
    {
        return $form->schema([
            Tabs::make('Support')
                ->tabs([

                    /* GENERAL */
                    Tabs\Tab::make('General')
                        ->schema([
                            Forms\Components\TextInput::make('slug')
                                ->label('Slug / Key')
                                ->helperText('Məs: guides, faq, warranty')
                                ->required()
                                ->maxLength(255)
                                ->unique(ignoreRecord: true),

                            Forms\Components\TextInput::make('icon')
                                ->label('Icon Class')
                                ->placeholder('heroicon-o-book-open / fa fa-question')
                                ->maxLength(255),

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

    /* =========================
       TABLE
    ========================= */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('slug')
                    ->label('Key')
                    ->searchable(),

                Tables\Columns\TextColumn::make('title_en')
                    ->label('Title (EN)')
                    ->limit(30)
                    ->searchable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),
            ])
            ->defaultSort('id', 'desc')
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    /* =========================
       PAGES
    ========================= */
    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListSupports::route('/'),
            'create' => Pages\CreateSupport::route('/create'),
            'edit'   => Pages\EditSupport::route('/{record}/edit'),
        ];
    }

    /* =========================
       HELPERS
    ========================= */
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
