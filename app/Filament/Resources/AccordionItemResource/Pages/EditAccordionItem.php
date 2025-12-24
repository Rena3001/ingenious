<?php

namespace App\Filament\Resources\AccordionItemResource\Pages;

use App\Filament\Resources\AccordionItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAccordionItem extends EditRecord
{
    protected static string $resource = AccordionItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
