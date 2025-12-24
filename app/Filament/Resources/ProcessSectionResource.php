<?php

namespace App\Filament\Resources;

use App\Models\ProcessSection;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use App\Filament\Resources\ProcessSectionResource\Pages;

class ProcessSectionResource extends Resource
{
    protected static ?string $model = ProcessSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';
    protected static ?string $navigationLabel = 'Process Section';
    protected static ?string $navigationGroup = 'Site Content';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([

            /* =====================
               MEDIA
            ===================== */
            Forms\Components\Section::make('Background')
                ->schema([
                    Forms\Components\FileUpload::make('background_image')
                        ->label('Background Image')
                        ->directory('sections/process')
                        ->image()
                        ->imageEditor(),
                ]),

            /* =====================
               TITLES (MULTI-LANG)
            ===================== */
            Forms\Components\Section::make('Titles')
                ->schema([
                    Forms\Components\Tabs::make('Title Languages')->tabs(
                        self::langTabs('title')
                    ),
                ]),

            /* =====================
               DESCRIPTIONS
            ===================== */
            Forms\Components\Section::make('Section Description')
                ->schema([
                    Forms\Components\Tabs::make('Description Languages')->tabs(
                        self::langTabs('description', textarea: true)
                    ),
                ]),
            Forms\Components\Section::make('Button')
                ->schema([
                    Forms\Components\TextInput::make('button_link')
                        ->label('Button Link')
                        ->placeholder('https://example.com/partner')
                        ->url()
                        ->maxLength(255),
                ]),

            /* =====================
               ICONS (STATIC COUNT = 3)
            ===================== */
            Forms\Components\Section::make('Icons (Flaticon Class)')
                ->columns(3)
                ->schema([
                    Forms\Components\TextInput::make('icon_1')
                        ->label('Step 1 class')
                        ->placeholder('flaticon-stopwatch'),

                    Forms\Components\TextInput::make('icon_2')
                        ->label('Step 2 class')
                        ->placeholder('flaticon-settings-2'),

                    Forms\Components\TextInput::make('icon_3')
                        ->label('Step 3 class')
                        ->placeholder('flaticon-calendar-3'),
                ]),

            /* =====================
               STEP DESCRIPTIONS
            ===================== */
            Forms\Components\Section::make('Step 1 Description')
                ->schema([
                    Forms\Components\Tabs::make()->tabs(
                        self::langTabs('step_1_desc', textarea: true)
                    ),
                ]),

            Forms\Components\Section::make('Step 2 Description')
                ->schema([
                    Forms\Components\Tabs::make()->tabs(
                        self::langTabs('step_2_desc', textarea: true)
                    ),
                ]),

            Forms\Components\Section::make('Step 3 Description')
                ->schema([
                    Forms\Components\Tabs::make()->tabs(
                        self::langTabs('step_3_desc', textarea: true)
                    ),
                ]),

            Forms\Components\Toggle::make('is_active')
                ->label('Active')
                ->default(true),
        ]);
    }

    /**
     * Helper for language tabs
     */
    protected static function langTabs(string $field, bool $textarea = false): array
    {
        $langs = ['az' => 'AZ', 'en' => 'EN', 'ru' => 'RU', 'de' => 'DE', 'fr' => 'FR', 'es' => 'ES', 'zh' => 'ZH'];

        return collect($langs)->map(function ($label, $lang) use ($field, $textarea) {
            return Forms\Components\Tabs\Tab::make($label)
                ->schema([
                    $textarea
                        ? Forms\Components\Textarea::make("{$field}_{$lang}")
                        ->rows(3)
                        ->label("{$label}")
                        : Forms\Components\TextInput::make("{$field}_{$lang}")
                        ->label("{$label}"),
                ]);
        })->toArray();
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title_en')->label('Title'),
            Tables\Columns\IconColumn::make('is_active')->boolean(),
        ])->actions([
            Tables\Actions\EditAction::make(),
        ])->bulkActions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProcessSections::route('/'),
            'edit' => Pages\EditProcessSection::route('/{record}/edit'),
        ];
    }
}
