<?php

namespace App\Filament\Resources\TechnicalServicesSliderResource\Pages;

use App\Filament\Resources\TechnicalServicesSliderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTechnicalServicesSlider extends EditRecord
{
    protected static string $resource = TechnicalServicesSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
