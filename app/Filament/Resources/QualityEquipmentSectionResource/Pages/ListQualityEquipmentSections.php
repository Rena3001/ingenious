<?php

namespace App\Filament\Resources\QualityEquipmentSectionResource\Pages;

use App\Filament\Resources\QualityEquipmentSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQualityEquipmentSections extends ListRecords
{
    protected static string $resource = QualityEquipmentSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
