<?php

namespace App\Filament\Resources\ElectricalEquipmentSliderResource\Pages;

use App\Filament\Resources\ElectricalEquipmentSliderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditElectricalEquipmentSlider extends EditRecord
{
    protected static string $resource = ElectricalEquipmentSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
