<?php

namespace App\Filament\Resources\AccordionItemResource\Pages;

use App\Filament\Resources\AccordionItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAccordionItems extends ListRecords
{
    protected static string $resource = AccordionItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
