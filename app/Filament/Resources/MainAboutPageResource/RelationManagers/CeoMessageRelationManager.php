<?php

namespace App\Filament\Resources\MainAboutPageResource\RelationManagers;

use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\RelationManagers\RelationManager;

class CeoMessageRelationManager extends RelationManager
{
    protected static string $relationship = 'ceoMessage';
    protected static ?string $title = 'CEO Message';

    public function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_az')->label('Title'),
                Tables\Columns\TextColumn::make('signature')->label('Signature'),
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->actions([
                EditAction::make(),
            ]);
    }
    public function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([

            Forms\Components\TextInput::make('signature')
                ->label('Signature / CEO Name'),

            Forms\Components\Tabs::make('Languages')->tabs([
                self::langTab('AZ', 'az'),
                self::langTab('EN', 'en'),
                self::langTab('RU', 'ru'),
                self::langTab('DE', 'de'),
                self::langTab('ES', 'es'),
                self::langTab('FR', 'fr'),
                self::langTab('ZH', 'zh'),
            ])->columnSpanFull(),
        ]);
    }

    protected static function langTab(string $label, string $locale)
    {
        return Forms\Components\Tabs\Tab::make($label)->schema([
            Forms\Components\TextInput::make("title_$locale")->label("Title ($label)"),
            Forms\Components\Textarea::make("message_$locale")->label("Message ($label)")->rows(6),
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
