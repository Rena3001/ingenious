<?php

namespace App\Filament\Resources\WarrantyFeatureSectionResource\Pages;

use App\Filament\Resources\WarrantyFeatureSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWarrantyFeatureSections extends ListRecords
{
    protected static string $resource = WarrantyFeatureSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
