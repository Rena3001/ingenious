<?php

namespace App\Filament\Resources\WarrantyContactCtaSectionResource\Pages;

use App\Filament\Resources\WarrantyContactCtaSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWarrantyContactCtaSections extends ListRecords
{
    protected static string $resource = WarrantyContactCtaSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
