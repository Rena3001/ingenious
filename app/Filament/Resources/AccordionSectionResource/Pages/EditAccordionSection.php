<?php

namespace App\Filament\Resources\AccordionSectionResource\Pages;

use App\Filament\Resources\AccordionSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAccordionSection extends EditRecord
{
    protected static string $resource = AccordionSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
