<?php

namespace App\Filament\Resources\TechnicalIconsResource\Pages;

use App\Filament\Resources\TechnicalIconsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTechnicalIcons extends ListRecords
{
    protected static string $resource = TechnicalIconsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
