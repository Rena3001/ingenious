<?php


namespace App\Filament\Resources;
use App\Filament\Resources\SecurityPackageResource\RelationManagers\SecurityPackageFeaturesRelationManager;
use App\Filament\Resources\SecurityPackageResource\Pages;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use App\Models\SecurityPackage;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class SecurityPackageResource extends Resource
{
    protected static ?string $model = SecurityPackage::class;

    protected static ?string $navigationIcon = 'heroicon-o-lock-closed';
    protected static ?string $navigationLabel = 'Security Package';
    protected static ?string $navigationGroup = 'Security';

    public static function form(Form $form): Form
    {
        return $form->schema([

            Select::make('product_id')
                ->relationship('product', 'title')
                ->required()
                ->searchable()
                ->label('Məhsul'),

            Toggle::make('is_active')
                ->default(true)
                ->label('Aktiv'),

            Tabs::make('Content')->tabs([

                // 🔹 TITLES (8)
                Tabs\Tab::make('Başlıq')->schema([
                    TextInput::make('title_az')->label('Başlıq (AZ)'),
                    TextInput::make('title_en')->label('Title (EN)'),
                    TextInput::make('title_ru')->label('Заголовок (RU)'),
                    TextInput::make('title_de')->label('Titel (DE)'),
                    TextInput::make('title_fr')->label('Titre (FR)'),
                    TextInput::make('title_es')->label('Título (ES)'),
                    TextInput::make('title_zh')->label('标题 (ZH)'),
                ]),

                // 🔹 DESCRIPTION (8.1)
                Tabs\Tab::make('Açıqlama')->schema([
                    Textarea::make('description_az')->label('Açıqlama (AZ)'),
                    Textarea::make('description_en')->label('Description (EN)'),
                    Textarea::make('description_ru')->label('Описание (RU)'),
                    Textarea::make('description_de')->label('Beschreibung (DE)'),
                    Textarea::make('description_fr')->label('Description (FR)'),
                    Textarea::make('description_es')->label('Descripción (ES)'),
                    Textarea::make('description_zh')->label('描述 (ZH)'),
                ]),

                // 🔹 TECH TITLE (9)
                Tabs\Tab::make('Texniki başlıq')->schema([
                    TextInput::make('features_title_az')
                        ->default('Təhlükəsizlik Paketi')
                        ->label('Başlıq (AZ)'),

                    TextInput::make('features_title_en')
                        ->default('Security Package')
                        ->label('Title (EN)'),
                ]),

                // 🔹 MEDIA (11)
                Tabs\Tab::make('Şəkillər')->schema([
                    FileUpload::make('background_image')
                        ->directory('security-packages/backgrounds')
                        ->image()
                        ->label('Arxa fon'),

                    FileUpload::make('model_image')
                        ->directory('security-packages/models')
                        ->image()
                        ->label('Model şəkli'),
                ]),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product.title')->label('Məhsul'),
                Tables\Columns\IconColumn::make('is_active')->boolean(),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            SecurityPackageFeaturesRelationManager::class,
        ];
    }
    public static function getPages(): array
{
    return [
        'index' => Pages\ListSecurityPackages::route('/'),
        'create' => Pages\CreateSecurityPackage::route('/create'),
        'edit' => Pages\EditSecurityPackage::route('/{record}/edit'),
    ];
}

}
