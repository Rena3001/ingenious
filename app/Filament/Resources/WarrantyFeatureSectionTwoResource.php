<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WarrantyFeatureSectionTwoResource\Pages;
use App\Models\FeatureSectionTwo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class WarrantyFeatureSectionTwoResource extends Resource
{
    protected static ?string $model = FeatureSectionTwo::class;

    protected static ?string $navigationIcon = 'heroicon-o-shield-check';
    protected static ?string $navigationLabel = 'Warranty & Support';
    protected static ?string $navigationGroup = 'Warranty and Services';
    protected static ?int $navigationSort = 40;

    public static function form(Form $form): Form
    {
        return $form->schema([

            /* GENERAL */
            Forms\Components\Section::make('General')->schema([
                Forms\Components\FileUpload::make('background_image')
                    ->label('Background Image')
                    ->image()
                    ->directory('features')
                    ->imagePreviewHeight('200')
                    ->columnSpanFull(),

                Forms\Components\Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ]),

            /* TITLE & DESCRIPTION */
            Forms\Components\Section::make('Title & Description')
                ->schema(
                    self::langFields('title', 'Title')
                    + self::langFields('description', 'Description', true)
                ),

            /* ICONS */
            Forms\Components\Section::make('Feature Icons')
                ->schema([
                    self::iconBlock(1),
                    self::iconBlock(2),
                    self::iconBlock(3),
                ])
                ->columns(3),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('background_image')->label('BG')->circular(),
                Tables\Columns\TextColumn::make('title_en')->label('Title (EN)')->searchable(),
                Tables\Columns\IconColumn::make('is_active')->boolean(),
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

    protected static function iconBlock(int $i): Forms\Components\Group
    {
        return Forms\Components\Group::make()->schema([
            Forms\Components\TextInput::make("icon_{$i}")
                ->label("Icon {$i} (class)")
                ->placeholder('flaticon-shield'),

            Forms\Components\TextInput::make("icon_{$i}_title_az")->label('Title AZ'),
            Forms\Components\TextInput::make("icon_{$i}_title_en")->label('Title EN'),
            Forms\Components\TextInput::make("icon_{$i}_title_ru")->label('Title RU'),
            Forms\Components\TextInput::make("icon_{$i}_title_de")->label('Title DE'),
            Forms\Components\TextInput::make("icon_{$i}_title_fr")->label('Title FR'),
            Forms\Components\TextInput::make("icon_{$i}_title_es")->label('Title ES'),
            Forms\Components\TextInput::make("icon_{$i}_title_zh")->label('Title ZH'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListWarrantyFeatureSectionTwos::route('/'),
            'create' => Pages\CreateWarrantyFeatureSectionTwo::route('/create'),
            'edit'   => Pages\EditWarrantyFeatureSectionTwo::route('/{record}/edit'),
        ];
    }
}
