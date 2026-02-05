<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QualityEquipmentSectionResource\Pages;
use App\Models\QualityConsumerEquipmentSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;

class QualityConsumerEquipmentSectionResource extends Resource
{
    protected static ?string $model = QualityConsumerEquipmentSection::class;
 
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationGroup = 'Site Sections';
    protected static ?string $navigationLabel = 'Quality Consumer Equipment';
    protected static ?string $modelLabel = 'Quality Equipment';
    protected static ?string $pluralModelLabel = 'Quality Equipment';
 
    public static function form(Form $form): Form
    {
        return $form->schema([
            Tabs::make('Quality Equipment Section')
                ->tabs([

                    /* =====================
                       GENERAL
                    ====================== */
                    Tabs\Tab::make('General')
                        ->schema([
                            Forms\Components\FileUpload::make('image')
                                ->disk('public')
                                ->directory('sections/quality-equipment')
                                ->image()
                                ->maxFiles(1)
                                ->getUploadedFileNameForStorageUsing(
                                    fn($file) => $file->hashName()
                                ),

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
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->disk('public')
                    ->label('Image')
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
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListQualityEquipmentSections::route('/'),
            'create' => Pages\CreateQualityEquipmentSection::route('/create'),
            'edit'   => Pages\EditQualityEquipmentSection::route('/{record}/edit'),
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
