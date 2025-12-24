<?php

namespace App\Filament\Resources\QualityConsumerEquipmentSectionResource\Pages;

use App\Filament\Resources\QualityConsumerEquipmentSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQualityConsumerEquipmentSections extends ListRecords
{
    protected static string $resource = QualityConsumerEquipmentSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
