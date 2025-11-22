<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Models\Blog;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([

            Forms\Components\Section::make("Title")
            ->schema([
                Forms\Components\TextInput::make('title_az')->label('Title AZ')->required(),
                Forms\Components\TextInput::make('title_en')->label('Title EN')->required(),
                Forms\Components\TextInput::make('title_ru')->label('Title RU')->required(),
            ]),

            Forms\Components\Section::make("Description")
            ->schema([
                Forms\Components\Textarea::make('description_az')->label('Description AZ')->required(),
                Forms\Components\Textarea::make('description_en')->label('Description EN')->required(),
                Forms\Components\Textarea::make('description_ru')->label('Description RU')->required(),
            ]),

            Forms\Components\FileUpload::make('image')
                ->label('Image')
                ->image()
                ->directory('blogs'),

            Forms\Components\Select::make('position')
                ->label('Image Position')
                ->options([
                    'left' => 'Image Left (Text Right)',
                    'right' => 'Image Right (Text Left)',
                ])
                ->default('left')
                ->required(),

        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title_az')->label('Title (AZ)')->searchable(),
            Tables\Columns\ImageColumn::make('image'),
            Tables\Columns\TextColumn::make('position'),
            Tables\Columns\TextColumn::make('created_at')->dateTime('d.m.Y'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
