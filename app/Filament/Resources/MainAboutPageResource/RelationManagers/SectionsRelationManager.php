<?php

namespace App\Filament\Resources\MainAboutPageResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Resources\RelationManagers\RelationManager;

class SectionsRelationManager extends RelationManager
{
    protected static string $relationship = 'sections';
    protected static ?string $title = 'Content Sections';

    public function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([

            Forms\Components\TextInput::make('key')
                ->label('Section Key (mission, vision, values...)')
                ->required(),

            Forms\Components\TextInput::make('sort_order')
                ->numeric()
                ->default(0),

            Forms\Components\Tabs::make('Languages')->tabs([
                static::langTab('AZ', 'az'),
                static::langTab('EN', 'en'),
                static::langTab('RU', 'ru'),
                static::langTab('DE', 'de'),
                static::langTab('ES', 'es'),
                static::langTab('FR', 'fr'),
                static::langTab('ZH', 'zh'),
            ])->columnSpanFull(),
        ]);
    }

    public function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('key'),
                Tables\Columns\TextColumn::make('sort_order'),
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->defaultSort('sort_order');
    }

    protected static function langTab(string $label, string $locale)
    {
        return Forms\Components\Tabs\Tab::make($label)->schema([
            Forms\Components\TextInput::make("title_$locale")->label("Title ($label)"),
            Forms\Components\Textarea::make("content_$locale")->label("Content ($label)")->rows(4),
        ]);
    }
    protected function canCreate(): bool
    {
        return true;
    }
    protected function canEdit($record): bool
    {
        return true;
    }

    protected function canDelete($record): bool
    {
        return true;
    }
}
