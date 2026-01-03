<?php

namespace App\Filament\Resources\WarrantyAccordionSectionResource\Pages;

use App\Filament\Resources\WarrantyAccordionSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWarrantyAccordionSections extends ListRecords
{
    protected static string $resource = WarrantyAccordionSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
