<?php

namespace App\Filament\Resources\Home2ndSectionResource\Pages;

use App\Filament\Resources\Home2ndSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHome2ndSections extends ListRecords
{
    protected static string $resource = Home2ndSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
