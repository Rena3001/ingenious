<?php

namespace App\Filament\Resources\ConsumerElectronicsSliderResource\Pages;

use App\Filament\Resources\ConsumerElectronicsSliderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConsumerElectronicsSlider extends EditRecord
{
    protected static string $resource = ConsumerElectronicsSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
