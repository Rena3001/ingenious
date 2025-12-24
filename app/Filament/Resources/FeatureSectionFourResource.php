<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeatureSectionFourResource\Pages;
use App\Filament\Resources\FeatureSectionFourResource\RelationManagers;
use App\Models\FeatureSectionFour;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeatureSectionFourResource extends Resource
{
    protected static ?string $model = FeatureSectionFour::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Features Section Four';

    protected static ?string $navigationGroup = 'Home Sections';

    public static function form(Form $form): Form
    {
        return $form->schema([

            // ================= UPPER SECTION =================
            Section::make('Upper Section')
                ->schema([
                    FileUpload::make('upper_image')
                        ->image()
                        ->directory('features/section-four'),

                    Tabs::make('Upper Content')->tabs([
                        self::langTab('az', 'upper'),
                        self::langTab('en', 'upper'),
                        self::langTab('ru', 'upper'),
                        self::langTab('de', 'upper'),
                        self::langTab('fr', 'upper'),
                        self::langTab('es', 'upper'),
                        self::langTab('zh', 'upper'),
                    ]),

                    Grid::make(4)->schema([
                        TextInput::make('upper_icon_1')->label('Icon 1 (class)'),
                        TextInput::make('upper_icon_1_url')->label('Icon 1 URL'),
                        TextInput::make('upper_icon_2')->label('Icon 2 (class)'),
                        TextInput::make('upper_icon_2_url')->label('Icon 2 URL'),
                        TextInput::make('upper_icon_3')->label('Icon 3 (class)'),
                        TextInput::make('upper_icon_3_url')->label('Icon 3 URL'),
                        TextInput::make('upper_icon_4')->label('Icon 4 (class)'),
                        TextInput::make('upper_icon_4_url')->label('Icon 4 URL'),
                    ]),
                ]),

            // ================= LOWER SECTION =================
            Section::make('Lower Section')
                ->schema([
                    FileUpload::make('lower_image')
                        ->image()
                        ->directory('features/section-four'),

                    Tabs::make('Lower Content')->tabs([
                        self::langTab('az', 'lower'),
                        self::langTab('en', 'lower'),
                        self::langTab('ru', 'lower'),
                        self::langTab('de', 'lower'),
                        self::langTab('fr', 'lower'),
                        self::langTab('es', 'lower'),
                        self::langTab('zh', 'lower'),
                    ]),

                    TextInput::make('button_url')
                        ->label('Button URL'),
                ]),

            Toggle::make('is_active')->default(true),
        ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    protected static function langTab(string $lang, string $prefix)
{
    return Tabs\Tab::make(strtoupper($lang))->schema([
        TextInput::make("{$prefix}_title_$lang")->label('Title'),
        Textarea::make("{$prefix}_description_$lang")->label('Description'),
    ]);
}


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFeatureSectionFours::route('/'),
            'create' => Pages\CreateFeatureSectionFour::route('/create'),
            'edit' => Pages\EditFeatureSectionFour::route('/{record}/edit'),
        ];
    }
}
