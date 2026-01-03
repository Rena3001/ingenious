<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WarrantyContactCtaSectionResource\Pages;
use App\Models\WarrantyContactCtaSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class WarrantyContactCtaSectionResource extends Resource
{
    protected static ?string $model = WarrantyContactCtaSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static ?string $navigationLabel = 'Warranty Contact CTA';
    protected static ?string $navigationGroup = 'Warranty and Services';
    protected static ?int $navigationSort = 90;

    public static function form(Form $form): Form
    {
        return $form->schema([

            Forms\Components\Section::make('General')
                ->schema([
                    Forms\Components\FileUpload::make('background_image')
                        ->label('Background Image (optional)')
                        ->image()
                        ->directory('warranty/cta')
                        ->imagePreviewHeight('200')
                        ->columnSpanFull(),

                    Forms\Components\Toggle::make('is_active')
                        ->label('Active')
                        ->default(true),
                ]),

            Forms\Components\Section::make('Title & Description')
                ->schema(
                    self::langFields('title', 'Title')
                    + self::langFields('description', 'Description', true)
                ),

            Forms\Components\Section::make('CTA Button')
                ->schema([
                    Forms\Components\TextInput::make('button_link')
                        ->label('Button Link')
                        ->placeholder('/contact')
                        ->required(),

                    ...self::langFields('button_text', 'Button Text'),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_en')
                    ->label('Title (EN)')
                    ->searchable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    protected static function langFields(string $field, string $label, bool $textarea = false): array
    {
        $locales = ['az','en','ru','de','fr','es','zh'];
        $fields = [];

        foreach ($locales as $locale) {
            $fields[] = $textarea
                ? Forms\Components\Textarea::make("{$field}_{$locale}")
                    ->label("{$label} ({$locale})")
                : Forms\Components\TextInput::make("{$field}_{$locale}")
                    ->label("{$label} ({$locale})");
        }

        return $fields;
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListWarrantyContactCtaSections::route('/'),
            'create' => Pages\CreateWarrantyContactCtaSection::route('/create'),
            'edit'   => Pages\EditWarrantyContactCtaSection::route('/{record}/edit'),
        ];
    }
}
