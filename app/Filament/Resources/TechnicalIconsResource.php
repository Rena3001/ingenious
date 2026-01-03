<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TechnicalIconsResource\Pages;
use App\Filament\Resources\TechnicalIconsResource\RelationManagers;
use App\Models\TechnicalIcons;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TechnicalIconsResource extends Resource
{
    protected static ?string $model = TechnicalIcons::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';
    protected static ?string $navigationGroup = 'Technical Services';
    protected static ?string $navigationLabel = 'Technical Icons';

    public static function form(Form $form): Form
    {
        return $form->schema([
            self::iconBlock(1),
            self::iconBlock(2),
            self::iconBlock(3),
            self::iconBlock(4),

            Forms\Components\Toggle::make('is_active')
                ->default(true),
        ]);
    }

    private static function iconBlock(int $i): Forms\Components\Fieldset
    {
        return Forms\Components\Fieldset::make("Icon {$i}")
            ->schema([
                Forms\Components\TextInput::make("icon_{$i}")
                    ->label('Flaticon Class (məs: flaticon-shield-2)')
                    ->required(),

                Forms\Components\Placeholder::make("preview_{$i}")
                    ->content(fn ($get) =>
                        '<i class="'.$get("icon_{$i}").'" style="font-size:32px"></i>'
                    )
                    ->disableLabel()
                    ->columnSpanFull(),

                Forms\Components\TextInput::make("icon_{$i}_title_az")
                    ->label('Title (AZ)'),

                Forms\Components\TextInput::make("icon_{$i}_title_en")
                    ->label('Title (EN)'),
            ])
            ->columns(2)
            ->columnSpanFull();
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('icon_1')->label('Icon 1'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTechnicalIcons::route('/'),
            'create' => Pages\CreateTechnicalIcons::route('/create'),
            'edit' => Pages\EditTechnicalIcons::route('/{record}/edit'),
        ];
    }
}
