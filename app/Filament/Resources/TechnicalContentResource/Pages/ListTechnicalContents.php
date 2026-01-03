<?php

namespace App\Filament\Resources\TechnicalContentResource\Pages;

use App\Filament\Resources\TechnicalContentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTechnicalContents extends ListRecords
{
    protected static string $resource = TechnicalContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
