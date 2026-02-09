<?php

namespace App\Filament\Resources\WarrantyProcessSectionResource\Pages;

use App\Filament\Resources\WarrantyProcessSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWarrantyProcessSections extends ListRecords
{
    protected static string $resource = WarrantyProcessSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
