<?php

namespace App\Filament\Resources\ElectricalEquipmentSliderResource\Pages;

use App\Filament\Resources\ElectricalEquipmentSliderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListElectricalEquipmentSliders extends ListRecords
{
    protected static string $resource = ElectricalEquipmentSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
