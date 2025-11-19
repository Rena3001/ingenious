<?php
namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use App\Models\ContactMessage;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;

class ContactResource extends Resource
{
    protected static ?string $model = ContactMessage::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static ?string $navigationLabel = 'Sorğular';
    protected static ?string $pluralModelLabel = 'Sorğular';
    protected static ?string $modelLabel = 'Sorğu';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')->label('Ad'),
            Forms\Components\TextInput::make('email')->label('Email'),
            Forms\Components\Textarea::make('message')->label('Mesaj'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')->label('Ad')->searchable(),
            Tables\Columns\TextColumn::make('email')->label('Email')->searchable(),
            Tables\Columns\TextColumn::make('message')->limit(50)->label('Mesaj'),
            Tables\Columns\TextColumn::make('created_at')->label('Göndərilib')->dateTime(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
        ];
    }
}
