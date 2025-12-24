<?php

namespace App\Filament\Resources\AccordionSectionResource\Pages;

use App\Filament\Resources\AccordionSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAccordionSections extends ListRecords
{
    protected static string $resource = AccordionSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
