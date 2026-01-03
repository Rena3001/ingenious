<?php

namespace App\Filament\Resources\PartnershipPageResource\Pages;

use App\Filament\Resources\PartnershipPageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPartnershipPages extends ListRecords
{
    protected static string $resource = PartnershipPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
